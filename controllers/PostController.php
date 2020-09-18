<?php
namespace app\controllers;
use Yii;
use app\models\TestForm;
class PostController extends AppController
{
    public $layout = 'basic';

    public function actionIndex()
    {
        $model = new TestForm();
        $this->view->title = 'Все статьи';
        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
        //$this->layout = 'basic';
        $this->view->title = 'Одна статья!';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);
        return $this->render('Show');
             }
}



