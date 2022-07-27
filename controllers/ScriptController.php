<?php


namespace app\controllers;


use yii\web\Controller;

class ScriptController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGreeting()
    {
        return $this->render('greeting');
    }

    public function actionInformation()
    {
        return $this->render('information');
    }

    public function actionOrder()
    {
        return $this->render('order');
    }

    public function actionCallTransfer()
    {
        return $this->render('callTransfer');
    }

    public function actionNonStandardQuestion()
    {
        return $this->render('nonStandardQuestion');
    }

    public function actionEndOfCall()
    {
        return $this->render('endOfCall');
    }

}