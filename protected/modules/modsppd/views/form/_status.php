<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'form-grid',
	'dataProvider'=>$data,
	// 'filter'=>$model,
	'columns'=>array(
		// 'id',
		// 'employee_id',
		'name',
		// 'service_provider',
		// 'unit',
		'class',
		'destination',
		// 'purpose',
		'departure',
		'arrival',
		// 'transport_type',
		// 'transport_vehicle',
		'sppd_type',
		'status',
		// 'statement_letter',
		// 'support_letter',
		// 'created_by',
		// 'created_date',
		
		array(
			'class'=>'CButtonColumn',
			'template' => '{view}',
		),
	),
)); ?>
