<?php

namespace backend\modules\menumanager;

/**
 * menumanager module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'backend\modules\menumanager\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * Menu uchun sayt bo'limlari
     */
    public function sections()
    {
        return [
            'header-menu/index' => "Asosiy kategoriya",
            'site/contact-us' => 'Bog\'lanish',
            'site/video' => 'Video',
            'site/gallery' => 'Gallery',
            'document/document-search' => 'Malumotlarni qidirish',
            'site/faq' => 'Savollar',
            'site/application' => 'Ariza yuborish',
        ];

    }
}
