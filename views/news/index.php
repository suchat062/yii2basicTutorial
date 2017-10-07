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
    'layout' => "{items}\n<div class='paginationClass'>{pager}</div>",
    'columns' => [
        'id',
        'title',
        'content:ntext',
        'email',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {button}',
            'buttons' => [
                'button' => function($url, $model, $key){
                    //return Html::a('Edit', ['edit?id='.$model->id], ['class' => $key]);
                }
            ],
            'header' => 'Action'
        ],
        [
            'attribute' => 'Edit',
            'format' => 'raw',
            'value' => function ($model, $key, $index, $column) {
                return Html::a("Update" ,['update?id='.$model->id], ['class' => 'btn btn-md btn-block btn-primary']);
            }
        ],
        [
            'attribute' => 'Delete',
            'format' => 'raw',
            'value' => function($model, $key, $index, $column){
                return Html::a('Delete', ['delete?id='.$model->id], ['class' => 'btn btn-danger']);
            }
        ]
    ]
]);?>

<?php echo Html::a('สร้างบทความ', ['create'], ['class' => 'btn btn-primary']);  ?>


