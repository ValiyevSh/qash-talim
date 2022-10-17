<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use mihaildev\elfinder\InputFile;
use mihaildev\elfinder\ElFinder;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>

        <?php

        echo $form->field($model, 'img')->widget(InputFile::className(), [
            'language'      => 'ru',
            'controller'    => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter'        => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'template'      => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
            'options'       => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'multiple'      => false       // возможность выбора нескольких файлов
        ]);
        ?>


        <div class="row">
            <div class="col d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn
                btn-success']) ?>
            </div>
        </div>


        <?php ActiveForm::end(); ?>

    </div>
</div>