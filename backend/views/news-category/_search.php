<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\NewsCategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-category-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
            'options' => [
        'data-pjax' => 1
        ],
        ]); ?>

        <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'slug') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn
        btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
