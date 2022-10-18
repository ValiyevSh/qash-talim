<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;


class Link extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%link}}';
    }

    public function behaviors()
    {
        return [
            'multilingual' => [
                'class' => MultilingualBehavior::className(),
                'languages' => [
                    'uz' => 'Uzbek',
                    'en' => 'English',
                    'ru' => 'Ruscha',

                ],
                'attributes' => [
                    'title',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title_uz'], 'required'],
            [['title','icon',], 'string', 'max' => 127],
            [['url'],'string'],
        ];
    }

    public static function find()
    {
        $query=new MultilingualQuery(get_called_class());
        return $query->multilingual();
    }

    public function attributeLabels()
    {
        return [

            'title'=>'Nomi',
            'icon'=>'Rasm',
            'url'=>'Silka',

        ];
    }

}
