<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Link */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card">
    <div class="card-body">

        <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>


        <div class="row">
            <div class="col d-flex justify-content-end">
                <?= Html::submitButton('Saqlash', ['class' => 'btn
                btn-success']) ?>
            </div>
        </div>


        <?php ActiveForm::end(); ?>

    </div>
</div>