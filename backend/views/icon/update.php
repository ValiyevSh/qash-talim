<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Icon */

$this->title = 'Update Icon: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Icons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

echo $this->render('_form', [
'model' => $model,
]);