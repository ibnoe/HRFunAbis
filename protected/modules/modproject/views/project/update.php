<?php
/* @var $this ProjectController */
/* @var $model Project */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Project', 'url'=>array('index')),
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'View Project', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<?php
	$this->beginWidget('zii.widgets.CPortlet', array(
		'title'=>'Update Proyek '.$model->name,
	));		
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php
	$this->endWidget();
?>