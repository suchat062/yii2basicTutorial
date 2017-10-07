<?php
namespace app\controllers;

use yii\web\Controller;

class HomeController extends Controller{

    public function actionIndex($name = 'NENG'){
        return $this->render('index', ['name' => $name]);
    }

}