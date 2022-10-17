<?php

namespace backend\models;

use common\widgets\AdminLteMenuWidget;
use Yii;

class Menu extends \yii\base\Model
{
    public static function getData(): string
    {
        return AdminLteMenuWidget::widget([
            'items' => [
                [
                    'label' => 'Bosh sahifa',
                    'icon' => 'home',
                    'url' => ['/site/index'],
                ],
                [
                    'label' => 'Sozlamalar',
                    'icon' => 'fas fa-cog',
                    'url' => '#',
                    'items' => [
                        [
                            'label' => 'Sayt logtip',
                            'icon' => 'fas fa-heading',
                            'url' => ['/logo/index'],
                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                'student/index',
                                'student/view',
                            ]),
                        ],
                        [
                            'label' => 'Slayder',
                            'icon' => 'fas fa-image',
                            'url' => ['/slider/index'],
                            'active' => Yii::$app->controller->getRoute() === 'student/studying',
                        ],
                         [

                         'label' => 'Linklar',
                        'icon' => 'fas fa-link',
                        'url' => ['/link/index'],
                        'active' => Yii::$app->controller->getRoute() === 'student/studying',
                         ],
                        [
                            'label' => 'Asosiy ko\'rsatkichlar',
                            'icon' => 'fas fa-chart-pie',
                            'url' => ['/indicator/index'],
                            'active' => Yii::$app->controller->getRoute() === 'student/studying',
                        ],
                        [
                            'label' => 'Video larvhalar',
                            'icon' => 'fas fa-video',
                            'url' => ['/video/index'],
                            'active' => Yii::$app->controller->getRoute() === 'student/studying',
                        ],
                        [
                            'label' => 'Foydali havolalar',
                            'icon' => 'fas fa-link',
                            'url' => ['/useful-link/index'],
                            'active' => Yii::$app->controller->getRoute() === 'student/studying',
                        ],
                        [
                            'label' => 'Ijtimoiy tarmoqlar',
                            'icon' => 'fas fa-globe',
                            'url' => ['/icon/index'],
                            'active' => Yii::$app->controller->getRoute() === 'student/studying',
                        ],
                    ]
                ],
                [
                    'label' => 'Yangiliklar',
                    'icon' => 'fas fa-newspaper',
                    'url' => '#',
                    'items' => [
                        [
                            'label' => 'Yangiliklar',
                            'icon' => 'far fa-newspaper',
                            'url' => ['/news/index'],
                            'active' => in_array(Yii::$app->controller->getRoute(), [
                                'student/index',
                                'student/view',
                            ]),
                        ],
                        [
                            'label' => 'Yangilik kategoriya',
                            'icon' => 'far fa-newspaper',
                            'url' => ['/news-category/index'],
                            'active' => Yii::$app->controller->getRoute() === 'student/studying',
                        ],

                    ]
                ],
                [
                    'label' => "Menu item",
                    'icon' => 'headset',
                    'url' => '#',
                ],

            ]
        ]);
    }
}