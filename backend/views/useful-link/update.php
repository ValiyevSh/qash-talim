<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UsefulLink */

$this->title = 'Update Useful Link: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Useful Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

echo $this->render('_form', [
'model' => $model,
]);