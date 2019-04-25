<?php

namespace app\controllers;
use app\models\Task;
use yii\web\Controller;



class TaskController extends Controller
{
    public function actionIndex()
    {

        $model = new Task();

        $model->setAttributes([
            'title' => 'Знакомство',
            'description' => 'Описание',
            'status' => 'Тестируется',
            'author' => 1,
            'responsible' => 200,
        ]);

        //var_dump($model->toArray());
        //var_dump($model);
        //exit;

        return $this->render('task', [
            'title' => 'Привет, тут будет форма задачи',
            'content' => 'форма задачи'
        ]);

    }



}
