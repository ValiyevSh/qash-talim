<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\News */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
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

            'title',
            [
            'attribute'=>'content',
            'format'=>'raw',
            ],
            'date',
            'category_id',
            [
                'attribute'=>'img',
                'format'=>'raw',
                'value'=>function($model)
                {
                    return "<img width='45px' src='".$model->img."'>";
                }
            ],
        ],
        ]) ?>
    </div>
</div>