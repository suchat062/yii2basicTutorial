<?php
use yii\helpers\Html;
use kartik\date\DatePicker;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;


// Multiple select without model
echo Select2::widget([
    'name' => 'state_2',
    'value' => '',
    'data' => $model,
    'language' => 'en',
    'options' => [
//        'multiple' => true,
        'placeholder' => 'Select states ...'
    ]
]);
?>
