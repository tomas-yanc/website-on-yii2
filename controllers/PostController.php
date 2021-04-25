<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Post;

class PostController extends Controller
{

    public function actionIndex()
    {
        //$posts = Post::find()->all();
        $query = Post::find()->with('category'); // Объект запроса к таблице
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('posts', 'pages'));
    }

    public function actionView($id)
    {
        var_dump($id);
        die;
    }

}