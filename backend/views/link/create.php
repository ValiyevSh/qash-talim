<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Link */

$this->title = 'Create Link';
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $this->render('_form', [
'model' => $model,
]);