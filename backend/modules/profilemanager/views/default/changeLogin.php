<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


/* @var $this \yii\web\View */
/* @var $model \backend\modules\profilemanager\models\ChangePasswordForm */

$this->title = Yii::t('app', 'Shaxsiy malumotlarni o\'zgartirish');
$this->params['breadcrumbs'][] = ['url' => ['index'], 'label' => Yii::t('app', 'Shaxsiy kabinet')];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-md-6">
        <?php $form = ActiveForm::begin() ?>
        <h5 class="ml-1"><b>Foydalanuvchi nomi</b></h5>
        <?= $form->field($model, 'phone')->textInput(['autofocus' => true])->label(false) ?>
        <?= Html::submitButton(Yii::t('app', 'Saqlash'), ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end() ?>
    </div>
</div>
