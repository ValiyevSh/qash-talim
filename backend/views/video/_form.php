<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
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
echo $form->field($model, 'img')->widget(\mihaildev\elfinder\InputFile::className(), [
    'language'      => 'ru',
    'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
    'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
    'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
    'options'       => ['class' => 'form-control'],
    'buttonOptions' => ['class' => 'btn btn-default'],
    'multiple'      => false       // возможность выбора нескольких файлов
]);
?>

<?= $form->field($model, 'video')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>

<?= $form->field($model, 'date')->widget(\kartik\datetime\DateTimePicker::classname(), [
    'options' => ['placeholder' => 'Vaqtni kiriting...'],
    'pluginOptions' => [
        'autoclose' => true
    ]
]); ?>

<?php
echo $form->field($model, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]);
?>
<?= $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::classname(), []); ?>

<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
