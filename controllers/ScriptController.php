<?php


namespace app\controllers;


use yii\web\Controller;

class ScriptController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}