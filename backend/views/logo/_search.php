<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LogoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="logo-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
            'options' => [
        'data-pjax' => 1
        ],
        ]); ?>

        <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'tel') ?>

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn
        btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
