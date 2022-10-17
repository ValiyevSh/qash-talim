<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Icon */

$this->title = 'Create Icon';
$this->params['breadcrumbs'][] = ['label' => 'Icons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
'model' => $model,
]);