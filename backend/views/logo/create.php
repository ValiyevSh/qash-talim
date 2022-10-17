<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Logo */

$this->title = 'Logotip qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Logos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
'model' => $model,
]);