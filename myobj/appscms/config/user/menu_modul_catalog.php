<?php
$menu_user = array(
	'dep_store'=>array('label'=>'dep_store', 'url'=>'admin/objects/models/depcat',
		'items'=>array(
			'depcatoption'=>array('label'=>'depcatoption', 'url'=>'admin/objects/models/depcatoption',
				'items'=>array(
					'depcatoptionparams'=>array('label'=>'depcatoptionparams', 'url'=>'admin/objects/models/depcatoptionparams')
				),
			),
			'graphic_sale'=>array('label'=>'graphic_sale', 'url'=>'admin/objects/ui/graphic_sale'),
		),
	),
);

Yii::app()->params['api_conf_menu'] =  array_merge(Yii::app()->params['api_conf_menu'],$menu_user);
