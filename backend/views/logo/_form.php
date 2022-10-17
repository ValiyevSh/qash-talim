<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;
/* @var $this yii\web\View */
?>

<?php if (Yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin() ?>

<?= $form->languageSwitcher($model); ?>

<?php
echo $form->field($model, 'img')->widget(InputFile::className(), [
    'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-default'],
    'multiple'      => false       // возможность выбора нескольких файлов
]);
?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'tel')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '+\9\9\8-99-999-99-99',
]) ?>
<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
