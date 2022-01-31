<?php

namespace akam\demomodule\controllers;


use Yii;
use yii\web\Controller;
use yii\web\Response;


class DemoController extends Controller
{

    public function actionIndex()
    {
        return "Demo Module Response";
    }

}
