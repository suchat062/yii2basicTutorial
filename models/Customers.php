<?php

namespace app\models;

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
            [['customer_fname', 'customer_lname', 'customer_age'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'ลำดับ',
            'customer_fname' => 'ชื่อ',
            'customer_lname' => 'นามสกุล',
            'customer_age' => 'อายุ',
        ];
    }
}
