<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        "fontawesome-free-6.2.0-web/css/all.css",
        "css/sign/jquery.fancybox.min.css",
        "css/sign/bootstrap.min.css",
        "css/sign/swiper-bundle.min.css",
        "css/main.css",
    ];
    public $js = [
        "voise/js/jquery.min.js",
        "js/jquery.fancybox.min.js",
        "voise/js/bootstrap.bundle.js",
        "voise/js/libs.js",
        "js/bootstrap.bundle.min.js",
        "js/scrollreveal.js",
        "js/gsap.min.js",
        "js/ScrollTrigger.min.js",
        "js/swiper-bundle.min.js",
        "js/jsPlumb.min.js",
        "js/index.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
