<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use yii\behaviors\AttributeBehavior;

class Video extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%video}}';
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
                    'content',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['content_uz'], 'required'],
            [['img','date'], 'string', 'max' => 127],
            [[ 'status'], 'number'],
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

            'content'=>'Ma\'lumot',
            'date'=>'Vaqt',
            'img'=>'Rasm',
            'status'=>'holat'
        ];
    }

}
