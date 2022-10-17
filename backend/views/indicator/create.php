<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Indicator */

$this->title = 'Create Indicator';
$this->params['breadcrumbs'][] = ['label' => 'Indicators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
'model' => $model,
]);