<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->params['update'] = Html::a('<i
        class="fa fa-pencil"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
$this->params['delete'] = Html::a('<i class="fa fa-trash"></i>', ['delete', 'id' => $model->id], [
'class' => 'btn btn-danger',
'data' => [
'confirm' => 'Siz rostdan ham ushbu elementni o\'chirmoqchimisiz?',
'method' => 'post',
],
]);
?>

<div class="card">
    <div class="card-body">
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

             'video',
             'date:date',
            [
                'attribute'=>'img',
                'format'=>'raw',
                'value'=>function($model)
                {
                    return "<img width='45px' src='".$model->img."'>";
                }
            ],
            [
                    'attribute'=>'content',
                'format'=>'raw',
            ]
        ],
        ]) ?>
    </div>
</div>