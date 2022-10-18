<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Logo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Logos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$this->params['update'] = Html::a('<i
        class="fa fa-pencil"></i>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
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
                return "<img width='45px' src='".$model->img."'>";
            }
           ],
            'tel',
            'email:email',
            'name',
        ],
        ]) ?>
    </div>
</div>