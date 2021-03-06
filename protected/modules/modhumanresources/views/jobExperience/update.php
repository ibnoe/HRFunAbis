<?php
// $this->breadcrumbs=array(
	// 'Job Experiences'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	// 'Update',
// );

// $this->menu=array(
	// array('label'=>'List JobExperience', 'url'=>array('index')),
	// array('label'=>'Create JobExperience', 'url'=>array('create')),
	// array('label'=>'View JobExperience', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Manage JobExperience', 'url'=>array('admin')),
// );
?>

<h3><?php echo Yii::t('ui', 'Update JobExperience >');?><?php echo $model->id; ?></h3>

<fieldset>
	<legend style="text-align:right;">
		<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			'buttonType'=>'link',
			'name'=>'btnReload',
			'options'=>array('icons'=>'js:{secondary:"ui-icon-arrowrefresh-1-w"}'),
			'url'=>array('update', 'id'=>$model->employee_id),
		)); ?>
		<?php $this->widget('zii.widgets.jui.CJuiButton', array(
			'buttonType'=>'link',
			'name'=>'btnBack',
			'options'=>array('icons'=>'js:{secondary:"ui-icon-arrow-1-w"}'),
			'url'=>array('/modhumanresources/jobExperience/experience', array('employee_id'=>Yii::app()->session['employee_id'])),
		)); ?>
	</legend>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</fieldset>