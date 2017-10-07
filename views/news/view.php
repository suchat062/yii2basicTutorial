<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->title;
?>

<h1><?php echo $model->title;?></h1>
<?php echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',
        'content:ntext'
    ]
]);?>

<?php echo Html::a("back" ,['index'], ['class' => 'btn btn-default']);?>

