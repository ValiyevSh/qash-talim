<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use yii\behaviors\AttributeBehavior;

class UsefulLink extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%useful_link}}';
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
                    'title','content'
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title_uz'], 'required'],
            [['content','img','links','title'], 'string', 'max' => 127],
            [[ 'content'], 'string'],
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

            'title'=>'Sarlavha',
            'content'=>'Ma\'lumot',
            'links'=>'Link',
            'img'=>'Rasm',
        ];
    }

}
