<?php
namespace app\components;

use yii;
use yii\base\Component;

class fistComponent extends Component{
    public $inter = 10;
    public function fist(){
        return "Fist Component";
    }

}