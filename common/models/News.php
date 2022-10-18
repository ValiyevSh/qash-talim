<?php

namespace common\models;

use gofuroov\multilingual\behaviors\MultilingualBehavior;
use gofuroov\multilingual\db\MultilingualLabelsTrait;
use gofuroov\multilingual\db\MultilingualQuery;
use yii\behaviors\AttributeBehavior;

class News extends \yii\db\ActiveRecord
{

    const ELON = 1;
    const YANGI = 2;
    const DOCUMENT = 3;

    use MultilingualLabelsTrait;

    public static function tableName()
    {
        return '{{%news}}';
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
                    'title','content',
                ]
            ],
        ];
    }

    public function rules()
    {
        return [
            [['title_uz'], 'required'],
            [['content'],'string'],
            [['slug'], 'safe'],
            [['title','img', 'date'], 'string', 'max' => 127],
            [['category_id','status'], 'number'],
            ['type_id', 'integer'],
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

            'date'=>'Kiritilgan vaqti',
            'img'=>'Rasm',
            'status'=>'Holat',
            'category_id'=>'Kategoriyasi',
            'title'=>'Sarlavha',
            'content'=>'Ma\'lumot',

        ];
    }


    /**
     * @return string[]
     */
    public static function types()
    {
        return [
            self::ELON => "E'lon",
            self::YANGI => "Yangiliklar",
            self::DOCUMENT => "Hujjatlar",
        ];
    }

    /**
     * @return string
     */
    public function getTypsLabel()
    {
        return $this->types() [$this->type_id];
    }

}
