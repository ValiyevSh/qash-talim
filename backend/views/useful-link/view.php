<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UsefulLink */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Useful Links', 'url' => ['index']];
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

                [
                    'attribute'=>'img',
                    'format'=>'raw',
                    'value'=>function($model)
                    {
                        return "< width='45px' img src='".$model->img."'>";
                    }
                ],
                'links',
                'title',
                  [
                       'attribute'=>'raw',
                      'format'=>'raw',
                  ]
        ],
        ]) ?>
    </div>
</div>