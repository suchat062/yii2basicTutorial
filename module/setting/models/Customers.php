<?php

namespace app\module\setting\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $customer_id
 * @property string $customer_fname
 * @property string $customer_lname
 * @property string $customer_age
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id'], 'integer'],
            [['customer_fname'], 'strings_lang'],
            [['customer_fname', 'customer_lname', 'customer_age'], 'string', 'max' => 255],
        ];
    }

    public function strings_lang($attribute, $params){
        if($this->customer_fname == "123"){
            return $this->addError($attribute, 'คุณกรอกข้อมูลไม่ถูกต้อง ' .$this->customer_fname);
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'customer_fname' => 'Customer Fname',
            'customer_lname' => 'Customer Lname',
            'customer_age' => 'Customer Age',
        ];
    }
}
