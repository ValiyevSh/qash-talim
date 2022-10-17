<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Indicator */

$this->title = 'Update Indicator: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Indicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

echo $this->render('_form', [
'model' => $model,
]);