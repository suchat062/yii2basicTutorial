<?php
namespace app\controllers;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use app\models\News;
use yii\web\NotFoundHttpException;
use Yii;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $query = News::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_ASC]],
            'pagination' => [
                'pageSize' => 2
            ],
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $model = new News();
        $postData = Yii::$app->request->post();
        if($model->load($postData) && $model->save()){
            return $this->redirect(['view', 'id' => $model->id]);
        }else{
            return $this->render('create', [
                'model' => $model
            ]);
        }
    }

    public function actionView($id){
        return $this->render('view', [
            'model' => $this->findModel($id)
        ]);
    }

    protected function findModel($id)
    {
        if(($model = News::findOne($id)) !== null){
            return $model;
        }else{
            throw new NotFoundHttpException('ไม่พบข้อมูลที่ต้องการ');
        }
    }
}