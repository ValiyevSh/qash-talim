<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UsefulLinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Foydali havolalar';
$this->params['breadcrumbs'][] = $this->title;
$this->params['create'] = Html::a('<i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-success'])
?>

<div class="card">
    <div class="card-body">

            <?php Pjax::begin(); ?>
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'attribute'=>'img',
                'format'=>'raw',
                'value'=>function($model)
                {
                    return "<img width='45px' src='".$model->img."'>";
                }
            ],
            'title',

            [
            'class' => ActionColumn::className(),
            ],
            ],
            ]); ?>
        
            <?php Pjax::end(); ?>

    </div>
</div>