<?php


namespace backend\modules\menumanager\controllers;


use common\models\DocumentCategory;
use common\models\HeaderMenu;
use common\models\Info;
use common\models\LeaderCategory;
use common\models\PostCategory;
use common\models\UsefulLink;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Html;

use yii\web\Controller;

class MenuController extends Controller
{

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['admin'],
                        ],
                    ],
                ],
            ]
        );
    }

    public function actionGetValue()
    {

        $options = '';
        $type = $_GET['type'];
        if ($type == 'category') {
            $options = $this->categories();
        }

        if ($type == 'page') {
            $options = $this->pages();
        }

        if ($type == 'news') {
            $options = $this->news();
        }

        if ($type == 'document') {
            $options = $this->documents();
        }

        if ($type == 'leader') {
            $options = $this->leaders();
        }

        if ($type == 'link') {
            $options = $this->links();
        }

        if ($type == 'c-action') {
            $options = $this->sections();
        }

        return Html::tag('select', $options, [
            'id' => 'tree-url_value',
            'class' => 'form-control',
            'name' => 'Menu[url_value]'
        ]);

    }

    private function categories()
    {
        $categories = HeaderMenu::find()->all();
        $options = Html::tag('option', "Kategoriyani tanlang...");
        foreach ($categories as $category) {
            $options .= Html::tag('option', $category->name, ['value' => $category->id]);
        }

        return $options;
    }

    private function pages()
    {
        $pages = Info::find()->all();
        $options = Html::tag('option', "Sahifani tanlang...");
        foreach ($pages as $page) {
            $options .= Html::tag('option', $page->title, ['value' => $page->slug]);
        }

        return $options;
    }

    private function news()
    {
        $news = PostCategory::find()->all();
        $options = Html::tag('option', "Sahifani tanlang...");
        foreach ($news as $new) {
            $options .= Html::tag('option', $new->title, ['value' => $new->slug]);
        }

        return $options;
    }

    private function documents()
    {
        $files = DocumentCategory::find()->all();
        $options = Html::tag('option', "Sahifani tanlang...");
        foreach ($files as $file) {
            $options .= Html::tag('option', $file->title, ['value' => $file->slug]);
        }

        return $options;
    }

    private function leaders()
    {
        $leaders = LeaderCategory::find()->all();
        $options = Html::tag('option', "Sahifani tanlang...");
        foreach ($leaders as $leader) {
            $options .= Html::tag('option', $leader->title, ['value' => $leader->slug]);
        }

        return $options;
    }

    private function links()
    {
        $links = UsefulLink::find()->andWhere(['status' => UsefulLink::STATUS_INACTIVE])->all();
        $options = Html::tag('option', "Sahifani tanlang...");
        foreach ($links as $link) {
            $options .= Html::tag('option', $link->name, ['value' => $link->url_name]);
        }

        return $options;
    }

    private function sections()
    {
        $sections = Yii::$app->getModule('menumanager')->sections();
        $options = Html::tag('option', "Sahifani tanlang ... ");
        foreach ($sections as $route => $label) {
            $options .= Html::tag('option', $label, ['value' => $route]);
        }
        return $options;
    }

}