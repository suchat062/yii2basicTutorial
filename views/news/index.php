<?php
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'การสร้างบทความ';
?>

<div class="page-header">
    <h1><?php echo $this->title;?></h1>
</div>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'tableOptions' => [
        'class' => 'table table-bordered tableView'
    ],
    'layout' => "{items}\n{pager}",
    'columns' => [
        'id',
        'title',
        'content:ntext'
    ]
]);?>

<?php echo Html::a('สร้างบทความ', ['create'], ['class' => 'btn btn-primary']);  ?>


