<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\LogoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sayt logotip';
$this->params['breadcrumbs'][] = $this->title;
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
            'tel',
            'email:email',
            [
            'class' => ActionColumn::className(),
                'template' => '{update} {view}',
            ],
            ],
            ]); ?>
        
            <?php Pjax::end(); ?>

    </div>
</div>