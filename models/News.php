<?php
namespace app\models;

use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function tableName()
    {
        return 'news';
    }

    public function rules()
    {
        return [
            ['title', 'required'],
            ['content', 'string'],
            ['email', 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับ',
            'title' => 'ชื่อเรื่อง',
            'content' => 'เนื้อหา',
            'email' => 'อีเมล์'
        ];
    }
}