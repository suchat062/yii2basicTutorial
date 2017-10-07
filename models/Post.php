<?php
namespace app\models;

use Yii;
use yii\base\Model;

class Post extends Model
{
    public $title;
    public $content;
    public $age;

    public function rules(){
        return [
            ['title', 'required', 'message' => 'ชื่อเรื่องไม่ควรว่าง'],
            ['content', 'required'],
            ['age', 'integer', 'message' => 'ต้องเป็นตัวเลขเท่านั้น']
        ];
    }

    public function attributeLabels(){
        return [
            'title' => 'ชื่อเรื่อง',
            'content' => 'เนื้อหา',
            'age' => 'อายุ'
        ];
    }
}