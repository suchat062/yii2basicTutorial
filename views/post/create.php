<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'title')->textInput();?>
<?php echo $form->field($model, 'content')->textarea(['style' => 'resize: none']);?>
<?php echo $form->field($model, 'age')->textInput(['type' => 'number', 'max' => 10, 'min' => 0]);?>
<div class="form-group">
    <?php echo Html::submitButton('ส่งข้อมูล', ['class' => 'btn btn-primary']);?>
</div>
<?php ActiveForm::end();?>
