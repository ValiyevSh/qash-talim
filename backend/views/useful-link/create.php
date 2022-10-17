<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UsefulLink */

$this->title = 'Create Useful Link';
$this->params['breadcrumbs'][] = ['label' => 'Useful Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
'model' => $model,
]);