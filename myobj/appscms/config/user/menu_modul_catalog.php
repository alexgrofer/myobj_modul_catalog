<?php
$menu_user = array(
	'ccatalog'=>array('label'=>'ccatalog', 'url'=>array('admin/objects/models/ccatalog'),
		'items'=>array(
			'ccatalogoption'=>array('label'=>'ccatalogoption', 'url'=>array('admin/objects/models/ccatalogoption'),
				'items'=>array(
					'ccatalogoptionparams'=>array('label'=>'ccatalogoptionparams', 'url'=>array('admin/objects/models/ccatalogoptionparams'))
				),
			),
			'graphic_sale'=>array('label'=>'graphic_sale', 'url'=>array('admin/objects/ui/graphic_sale')),
		),
	),
);

Yii::app()->params['api_conf_menu'] =  array_merge(Yii::app()->params['api_conf_menu'],$menu_user);
