<?php

namespace common\models;
use zxbodya\yii2\galleryManager\GalleryBehavior;
use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $img
 */
class Slider extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'img' => 'Rasm',
        ];
    }
}
