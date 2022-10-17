<?php

namespace backend\modules\smsmanager\models;

use Yii;
use yii\helpers\Json;
use yii\web\ForbiddenHttpException;

/**
 *
 * @property-read string $password
 * @property-read mixed|false $newToken
 * @property-read string $email
 * @property-read null|false|mixed $token
 */
class Sms extends \yii\base\Component
{

    public $tokenExpiredDays = 29;

    /**
     * @var int Sms multiple jo'natishda har bir massivda nechtadan sms jo'natilishi kerakligi
     */
    public $multipleMessagesCount = 90;

    public function getEmail()
    {
        $email = SmsSettings::findOne(['idn' => 'email']);
        return $email->value;
    }

    public function getPassword()
    {
        $password = SmsSettings::findOne(['idn' => 'password']);
        return $password->value;
    }

    /**
     * @return false|mixed
     */
    public function getNewToken()
    {
        $email = $this->email;
        $password = $this->password;
        if ($email == '' || $password == '') {
            Yii::$app->session->setFlash('error', 'Email bilan parolni kiriting!');
            return false;
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "notify.eskiz.uz/api/auth/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('email' => $email, 'password' => $password),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        if (!$response) {
            Yii::$app->session->setFlash('error', 'Tokenni yangilashda xatolik yuz berdi!');
            return false;
        }

        $result = Json::decode($response);
        if ($result['message'] == 'token_generated') {
            return $result['data']['token'];
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function updateToken()
    {

        $newToken = $this->getNewToken();
        if (!$newToken) {
            return false;
        }

        $model = SmsSettings::findOne(['idn' => 'token']);
        if ($model == null) {
            $model = new SmsSettings([
                'idn' => 'token',
                'name' => 'Token'
            ]);
        }

        $model->value = $newToken;
        if ($model->save()) {
            return $newToken;
        } else {
            return false;
        }
    }

    /**
     * @return false|mixed|null
     */
    public function getToken()
    {
        $model = SmsSettings::findOne(['idn' => 'token']);
        if ($model == null) {
            $model = new SmsSettings([
                'idn' => 'token',
                'name' => 'Token',
                'value' => $this->getNewToken(),
            ]);
            $model->save();
        } else {
            if ($model->value == '' || time() >= $model->updated_at + $this->tokenExpiredDays * 86400) {
                return $this->updateToken();
            } else {
                return $model->value;
            }

        }
    }

    /**
     * @param $phoneNumber
     * @param $message
     * @return bool
     * @error response:  "{"status":"error","message":{"mobile_phone":["The mobile phone format is invalid."]}}"
     **/
    public function sendMessage($phoneNumber, $message)
    {

        $phoneNumber = str_replace('+', "", $phoneNumber);

        if (strlen($phoneNumber) == 9) {
            $phoneNumber = "998" . $phoneNumber;
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "notify.eskiz.uz/api/message/sms/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'mobile_phone' => $phoneNumber,
                'message' => $message,
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $this->getToken()
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        if (!$response) {
            return false;
        }

        $result = Json::decode($response);
        if ($result['status'] === 'error') {
            return false;
        } else {
            return true;
        }
    }
    public function sendVerificationCode($phoneNumber, $code)
    {

        $phoneNumber = str_replace('+', "", $phoneNumber);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "notify.eskiz.uz/api/message/sms/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array(
                'mobile_phone' => $phoneNumber,
                'message' => $code,
            ),
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $this->getToken()
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        if (!$response) {
            return false;
        }

        $result = Json::decode($response);
        if ($result['status'] === 'error') {
            return false;
        } else {
            return true;
        }
    }

    /**
     * @throws \yii\web\ForbiddenHttpException
     */
    public function sendMessageMultiple($phoneNumbers, $message)
    {

        $phoneNumbersCount = count($phoneNumbers);
        $multipleMessagesCount = $this->multipleMessagesCount;
        $index = 0;
        set_time_limit(0);

        do {
            $numbers = array_slice($phoneNumbers, $index, $multipleMessagesCount, true);
            $index += $multipleMessagesCount;

            $messages = [];

            foreach ($numbers as $key => $number) {

                $number = $this->normalizePhoneNumber($number);
                $messages[] = [
                    'user_sms_id' => (string)$key,
                    'to' => $number,
                    'text' => $message
                ];
            }

            try {

                if (!$this->sendMultipleMessages($messages)) {
                    return false;
                }

            } catch (\Exception $exception) {
                throw new ForbiddenHttpException($exception->getMessage());
            }

        } while ($index < $phoneNumbersCount);

        return true;

    }

    /**
     * @param $messages array should be like this:
     *
     *  ```php
     *          "messages" => [
     *               [ "user_sms_id" => "", "to" => 998937371233, "text" => "hello"],
     *               [ "user_sms_id" => "", "to" => 998937371233, "text" => "hello"],
     *           ]
     *   ```
     * @return bool
     */
    public function sendMultipleMessages(array $messages)
    {

        $items = [];
        $items['from'] = '4548';
        $items['dispatch_id'] = 123;
        $items['messages'] = $messages;
        $items = json_encode($items);
        $token = $this->getToken();

        if (!$token) {
            return false;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'notify.eskiz.uz/api/message/sms/send-batch',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $items,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $token,
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return true;

    }

    /**
     * @param $phoneNumber
     * @return false|string
     */
    public function normalizePhoneNumber($phoneNumber)
    {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        $length = strlen($phoneNumber);
        if ($length == 9) {
            $phoneNumber = '998' . $phoneNumber;
        }
        return $phoneNumber;
    }

}