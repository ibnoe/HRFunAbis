<div class="span12">
	<?php
		$this->beginWidget('bootstrap.widgets.TbBox', array(
		    'title' => 'Reimburse Jamuan',
		    'headerButtons' => array(
				array(
					'class' => 'bootstrap.widgets.TbButtonGroup',
					'buttons'=>array(
						array('label'=>'Tambah Reimburse', 'url'=>array('/modsppd/reimburseBBM/create','id'=>$data->id)),
					),
				),
		    ),
		));		
	?>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'reimburse-bbm-grid',
		'dataProvider'=>$data,
		// 'filter'=>$data,
		'columns'=>array(
			'id',
			'date',
			'transaction_description',
			'amount',
			'cc',
			'usage_type',
			/*
			'created_date',
			'created_by',
			*/
			array(
				'class'=>'CButtonColumn',
				'buttons' => array(
					'view'=>array(
	            		'url'=>'Yii::app()->createUrl("modsppd/reimburseBBM/view", array("id"=>$data->id))',
	            		),
	            	'update'=>array(
	            		'url'=>'Yii::app()->createUrl("modsppd/reimburseBBM/update", array("id"=>$data->id))',
	            		),
	            	'delete'=>array(
	            		'url'=>'Yii::app()->createUrl("modsppd/reimburseBBM/delete", array("id"=>$data->id))',
	            		),
					),
			),
		),
	)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'label'=>'Upload',
		    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		    'size'=>'large', // null, 'large', 'small' or 'mini'
		    'url'=>array('upload','id'=>$data->id),
		)); ?>
	</div>

	<?php $this->endWidget() ?>
</div>