<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $model common\models\Link */
/* @var $form yii\widgets\ActiveForm */
?>
<?php if (Yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->languageSwitcher($model); ?>
        <?php
        echo $form->field($model, 'icon')->widget(InputFile::className(), [
            'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'multiple'      => false       // возможность выбора нескольких файлов
        ]);
        ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn
                btn-success']) ?>
            </div>
        </div>


        <?php ActiveForm::end(); ?>

    </div>
</div>