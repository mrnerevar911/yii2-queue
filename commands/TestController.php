<?php


namespace app\commands;


use Yii;
use yii\console\Controller;

class TestController extends Controller
{

    public function actionIndex()
    {
        file_put_contents('test', 'test');
        Yii::$app->queue->push(new \app\jobs\TestJob(['text' => 'test', 'file' => Yii::$app->basePath . '/web/file.txt']));
    }

}