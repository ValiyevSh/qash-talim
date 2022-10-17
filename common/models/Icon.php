<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "icon".
 *
 * @property int $id
 * @property string $icon
 * @property string|null $link
 * @property int $status
 */
class Icon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icon', 'status'], 'required'],
            [['link'], 'string'],
            [['status'], 'integer'],
            [['icon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'icon'=>'Ikonka',
            'link'=>'Url manzillar',
            'status'=>'Holat',

        ];
    }
}
