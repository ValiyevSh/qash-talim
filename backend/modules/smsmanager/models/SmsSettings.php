<?php


namespace backend\modules\smsmanager\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * Class SmsSettings
 * @package backend\modules\smsmanager\models
 * @property int $id [int(11)]
 * @property string $idn [varchar(100)]
 * @property string $name [varchar(255)]
 * @property string $value
 * @property int $created_at [int(11)]
 * @property int $updated_at [int(11)]
 */
class SmsSettings extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'sms_settings';
    }

    public function rules()
    {
        return [
            [['idn', 'value', 'name'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    public function attributeLabels()
    {
        return [

            'idn' => Yii::t('app', 'Identifikator'),
            'name' => Yii::t('app', "Nomi"),
            'value' => Yii::t('app', 'Qiymati'),

        ];
    }

    public static function updateToken()
    {
        $model = static::findOne(['idn' => 'token']);
        if ($model == null) {
            $model = new SmsSettings([
                'idn' => 'token',
                'name' => 'Token'
            ]);
        }

        $sms = new Sms();

        $model->value = $sms->getNewToken();
        if ($model->save()) {
            Yii::$app->session->setFlash('success', Yii::t('app', 'The token has been updated'));
            return true;
        } else {
            $errorMessage = reset($model->firstErrors);
            Yii::$app->session->setFlash('error', $errorMessage);
            return false;
        }

    }

}