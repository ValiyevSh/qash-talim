<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use yii\behaviors\AttributeBehavior;

class NewsCategory extends \yii\db\ActiveRecord
{

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%news_category}}';
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
            [['title'], 'string', 'max' => 127],
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

        ];
    }

    public function getNewscat()
    {
        return $this->hasOne(News::class, ['category_id' => 'id']);
    }


}
