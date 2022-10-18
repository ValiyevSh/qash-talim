<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>



<div id="animationWindow">
    <div class="kinetic"></div>
</div>

<div class="special-fixed abd">
    <div class="special-fixed-container">
        <button class="special-fixed__btn" id="speechToggle" title="Голосовой помошник влючён">
            <i class="fas fa-volume-up"></i>
        </button>
    </div>
</div>


<!-- //modal-search -->

<?=$this->render('_modal-search');?>


<!-- //menu-left -->
<div class="bg-p"></div>
<div class="bg-m"></div>

<?=$this->render('_menu-l');?>

<!-- //nsvigation -->

<?=$this->render('_navigation-top');?>

<?=$this->render('_menu-bar');?>



        <?= $content ?>
<!-- //footer -->

<?=$this->render('_footer');?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
