<?php
$menu_user = array(
	'catalog'=>array('label'=>'catalog',
		'items'=>array(
			'section'=>array('label'=>'section', 'url'=>array('admin/objects/models/ccatalogCategory')),
			'sectionoption'=>array('label'=>'section option', 'url'=>array('admin/objects/models/ccatalogOption'),
				'items'=>array(
					'optionparams'=>array('label'=>'option params', 'url'=>array('admin/objects/models/ccatalogOptionParam'))
				),
			),
			'graphic_sale'=>array('label'=>'graphic sales', 'url'=>array('admin/objects/ui/graphic_sale')),
		),
	),
);

Yii::app()->params['api_conf_menu'] =  array_merge(Yii::app()->params['api_conf_menu'],$menu_user);
