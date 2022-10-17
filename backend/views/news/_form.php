<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use common\components\Modal;
use mihaildev\ckeditor\CKEditor;
use kartik\widgets\DateTimePicker;
use kartik\widgets\SwitchInput;
/* @var $this yii\web\View */
?>
<?php
$datas=new \common\models\NewsCategory();

?>
<?php if (Yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>
<?php
$datas=\common\models\NewsCategory::find()->all();

?>
<?php $form = ActiveForm::begin() ?>

<?= $form->languageSwitcher($model); ?>

<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

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

<?php
echo $form->field($model, 'date')->widget(\kartik\datetime\DateTimePicker::classname(), [
    'options' => ['placeholder' => 'Vaqtni kiriting'],
    'pluginOptions' => [
        'autoclose' => true
    ]
]);

?>
<?= $form->field($model, 'category_id')->widget(\kartik\select2\Select2::classname(), [
    'data' => $datas->newscat->title,
    'options' => ['placeholder' => 'Kategoriyani tanlang ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]); ?>

<?php
echo $form->field($model, 'content')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'basic', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
]); ?>
<?php
echo $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::classname(), []); ?>

<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
