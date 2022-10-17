<?php

namespace backend\modules\profilemanager\models;

use common\models\User;
use Yii;

class ProfileUser extends User
{

    public function rules()
    {
        return [
            ['phone', 'required'],
            ['phone', 'unique'],
            [['phone'], 'string', 'max' => 255],
        ];
    }

    public function setAttributeLabels()
    {
        return [
            'phone' => "Login",
        ];
    }

    public function scenarios()
    {
        $s = parent::scenarios();
        $s['change_username'] = ['phone'];
        $s['change_password'] = ['password_hash'];
        return $s;
    }

    /**
     * @return \backend\modules\profilemanager\models\ProfileUser|false
     */
    public static function getUserModel()
    {

        $model = static::findOne(Yii::$app->user->getId());
        if ($model == null) {
            return false;
        }

        $model->scenario = 'change_username';
        return $model;
    }

}