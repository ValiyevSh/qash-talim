<?php

use common\models\User;
use yii\helpers\Url;

/** @var \soft\web\View $this */


$this->title = Yii::t('app', 'Shaxsiy cabinet');
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="profilemanager-default-index">
    <p>
        <a href="<?= Url::to(['change-login']) ?>" class="btn btn-primary">
            <i class="fa fa-edit"></i> <?= Yii::t('app', 'Shaxsiy malumotlarni o\'zgartirish') ?>
        </a>
        <a href="<?= Url::to(['change-password']) ?>" class="btn btn-danger">
            <i class="fa fa-key"></i> <?= Yii::t('app', 'Parolni o\'zgartirish') ?>
        </a>
    </p>
</div>

<table class="table table-hover table-bordered">
    <thead>
    <tr class="text-center">
        <th scope="col">№</th>
        <th scope="col">Foydalanvchi nomi</th>
        <th scope="col">Foydalanvchi paroli</th>
        <th scope="col">Elektron pochta</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row"><?php echo Yii::$app->user->identity->id ?></th>
        <td><?php echo Yii::$app->user->identity->phone?></td>
        <td><?php echo Yii::$app->user->identity->password_hash?></td>
        <td><?php echo Yii::$app->user->identity->email?></td>
    </tr>
    </tbody>
</table>
