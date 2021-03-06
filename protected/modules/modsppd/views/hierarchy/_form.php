<?php
/* @var $this HierarchyController */
/* @var $model Hierarchy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hierarchy-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model,'employee_id',CHtml::listData(Employee::model()->findAll(),'employee_id','full_name'), array('empty'=>'pilih employee')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manager_id'); ?>
		<?php echo $form->dropDownList($model,'manager_id',CHtml::listData(Employee::model()->findAll(),'employee_id','full_name'), array('empty'=>'pilih manager')); ?>
		<?php echo $form->error($model,'manager_id'); ?>
	</div>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'manager_name'); ?>
		<?php echo $form->textField($model,'manager_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'manager_name'); ?>
	</div> -->

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->