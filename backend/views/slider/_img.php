<?php

use yii\helpers\Url;
use zxbodya\yii2\galleryManager\GalleryManager;

/* @var $this yii\web\View */
/* @var $model Product */
?>
<?php
if ($model->isNewRecord) {
    echo 'Can not upload images for new record';
} else {
    echo GalleryManager::widget(
        [
            'model' => $model,
            'behaviorName' => 'galleryBehavior',
            'apiRoute' => 'discount/galleryApi'
        ]
    );
}
?>
<a href="<?=Url::to(['slider/index'])?>"><span class="btn btn-danger">Orqaga</span></a>
