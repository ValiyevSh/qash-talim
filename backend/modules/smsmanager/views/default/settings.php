<?php

use yii\helpers\Html;

$this->title = Yii::t('app', 'SMS sozlamalari');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'SMS sozlamalari'), 'url' => ['/smsmanager']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="availability-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            [
                'attribute' => 'value',
                'format' => 'raw',
                'contentOptions' => [
                    'style' => 'word-wrap:anywhere',
                ],
            ],
            'updated_at:datetime',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {

                        if ($model->idn == 'token') {

                            return Html::a('<span class="fas fa-sync-alt">',
                                ['update-token'],
                                [
                                    'class' => 'btn btn-sm btn-info',
                                    'title' => Yii::t('app', 'Update token'),

                                ]);

                        }

                        return Html::a('<span class="fas fa-edit">',
                            ['update-settings', 'id' => $key],
                            ['class' => 'btn btn-sm btn-success']);

                    }
                ]
            ],
        ],
    ]); ?>
</div>

