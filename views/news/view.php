<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->title;
?>

<h1><?php echo $model->title;?></h1>
<?php
    if(Yii::$app->session->hasFlash('success')){
        echo "<div class='alert alert-success'>". Yii::$app->session->getFlash('success')."</div>";
    }
?>
<?php echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',
        'content:ntext',
        'email'
    ]
]);?>

<?php echo Html::a("back" ,['index'], ['class' => 'btn btn-default']);?>

