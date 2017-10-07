<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin();?>
<?php echo $form->field($model, 'title');?>
<?php echo $form->field($model, 'content')->textarea();?>
<div class="form-group">
    <?php echo Html::submitButton('บันทึกข้อมูล', ['class' => 'btn btn-success'])?>
</div>
<?php ActiveForm::end();?>
