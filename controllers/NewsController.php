<?php
namespace app\controllers;

use yii\data\ActiveDataProvider;
use yii\web\Controller;
use app\models\News;
use yii\web\NotFoundHttpException;
use Yii;

class NewsController extends Controller
{
    protected function dataProvider(){
        $query = News::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_ASC]],
            'pagination' => [
                'pageSize' => 5
            ],
        ]);
        return $dataProvider;
    }

    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => $this->dataProvider(),
        ]);
    }

    public function actionCreate()
    {
        $model = new News();
        $postData = Yii::$app->request->post();
        if($model->load($postData) && $model->save()){
            Yii::$app->session->setFlash('success', 'Insert Success');
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

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $postData = Yii::$app->request->post();
        if($model->load($postData) && $model->validate()){
            $model->save();
            return $this->redirect(['index']);
        }
        return $this->render('edit', [
            'model' => $model
        ]);
    }

    public function actionDelete(){
        $getData = (object)Yii::$app->request->get();
        if($this->deleteModel($getData->id)){
            return $this->redirect(['index']);
        }
    }

    protected function findModel($id)
    {
        if(($model = News::findOne($id)) !== null){
            return $model;
        }else{
            throw new NotFoundHttpException('ไม่พบข้อมูลที่ต้องการ');
        }
    }

    protected function deleteModel($id){
        if(($model = News::findOne($id)->delete()) !== null){
            return $model;
        }else{
            throw new NotFoundHttpException('ไม่สามารถลบได้');
        }
    }
}