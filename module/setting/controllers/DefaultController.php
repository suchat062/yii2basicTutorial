<?php

namespace app\module\setting\controllers;

use yii\web\Controller;
use app\module\setting\models\Customers;
use yii\helpers\ArrayHelper;

/**
 * Default controller for the `Setting` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $customer = Customers::find()->asArray()->all();
        $array = [];
        foreach ($customer as $key => $value){
            $value = (object)$value;
            $array[$value->customer_id] = $value->customer_fname . ' ' . $value->customer_lname;
        }
        return $this->render('index', [
            'model' => $array
        ]);
    }
}
