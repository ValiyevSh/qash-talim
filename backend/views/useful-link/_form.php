<?php

use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use mihaildev\elfinder\InputFile;
/* @var $this yii\web\View */
/* @var $model common\models\UsefulLink */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->languageSwitcher($model); ?>
            <?= $form->field($model, 'img')->widget(InputFile::className(), [
                'language' => 'ru',
                'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
                'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
                'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
                'options' => ['class' => 'form-control'],
                'buttonOptions' => ['class' => 'btn btn-default'],
                'multiple' => false       // возможность выбора нескольких файлов
            ]);
            ?>
            <?= $form->field($model, 'links')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'content')->widget(\mihaildev\ckeditor\CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'basic',
                    'inline' => false,
                ],
            ]); ?>

        <div class="row">
            <div class="col d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn
                btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>