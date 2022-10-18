<?php

use yii\caching\FileCache;

return [
    'name' => 'My Application',
    'language'=>'uz',
    'timeZone' => 'Asia/Tashkent',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'container' => [
        'definitions' => [
            \yii\widgets\LinkPager::class => \yii\bootstrap4\LinkPager::class,
        ],
    ],

    'vendorPath' => dirname(__DIR__, 2) . '/vendor',
    'modules' => [
        'treemanager' => [
            'class' => '\kartik\tree\Module',
        ],
        'menumanager' => [
            'class' => 'backend\modules\menumanager\Module'
        ],
        'translate-manager' => [
            'class' => 'wokster\translationmanager\TranslationManager',
            'languages' => ['uz','en','ru'],
        ],

    ],
    'components' => [

        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    'forceTranslation' => true,
                ]
            ],
        ],
        'on beforeAction' => function ($event) {

            if (Yii::$app instanceof \yii\web\Application) {
                \common\components\LanguageHelper::setLanguage();}
           },
        'cache' => [
            'class' => FileCache::class,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            ],
        ],
    ],
];
