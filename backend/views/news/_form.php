<?php
/**
 * @var $model News
 */

use common\models\News;
use common\models\NewsCategory;
use kartik\datetime\DateTimePicker;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use mihaildev\elfinder\InputFile;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use gofuroov\multilingual\widgets\ActiveForm;
use common\components\Modal;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
?>
<?php
$datas = new NewsCategory();

?>
<?php if (Yii::$app->session->hasFlash('message')): ?>
    <div class="alert alert-info" role="alert">
        <?= Yii::$app->session->getFlash('message') ?>
    </div>
<?php endif; ?>
<?php
$datas = NewsCategory::find()->all();

?>
<div class="card">
    <div class="card-body">
        <?php $form = ActiveForm::begin() ?>

        <?= $form->languageSwitcher($model); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'img')->widget(InputFile::className(), [
            'language' => 'ru',
            'controller' => 'elfinder', // вставляем название контроллера, по умолчанию равен elfinder
            'filter' => 'image',    // фильтр файлов, можно задать массив фильтров https://github.com/Studio-42/elFinder/wiki/Client-configuration-options#wiki-onlyMimes
            'template' => '<div class="input-group">{input}<span class="input-group-btn">{button}</span></div>',
            'options' => ['class' => 'form-control'],
            'buttonOptions' => ['class' => 'btn btn-default'],
            'multiple' => false       // возможность выбора нескольких файлов
        ]);
        ?>

        <?php
        echo $form->field($model, 'date')->widget(DateTimePicker::classname(), [
            'options' => ['placeholder' => 'Vaqtni kiriting'],
            'pluginOptions' => [
                'autoclose' => true
            ]
        ]);

        ?>

        <div class="row">
            <div class="col-sm-6">
                <?= $form->field($model, 'category_id')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(NewsCategory::find()->all(), 'id', 'title'),
                    'options' => ['placeholder' => 'Kategoriyani tanlang ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'type_id')->widget(Select2::classname(), [
                    'data' => News::types(),
                    'options' => ['placeholder' => 'Kategoriyani tanlang ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
            </div>
        </div>


        <?php
        echo $form->field($model, 'content')->widget(CKEditor::className(), [
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]); ?>
        <?php
        echo $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>