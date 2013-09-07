<?php
$models = array(
	//STORE
	'ccatalogCategory' => array(
		'namemodel' => 'ccatalogCategory',
		'relation' => array('options'=>array('ccatalogOption','categories')),
		'releate_name' => array('ccatalogCategory'=>'categories'),
	),
	'ccatalogOption' => array(
		'namemodel' => 'ccatalogOption',
		'relation' => array('params'=>array('ccatalogOptionParam','option'),'categories'=>array('ccatalogCategory','options')),
		'releate_name' => array('CTLoption'=>'option','ccatalogOption'=>'options'),
	),
	'ccatalogOptionParam' => array(
		'namemodel' => 'ccatalogOptionParam',
		'relation' => array('option'=>array('ccatalogOption','params')),
		'releate_name' => array('ccatalogOptionParam'=>'params'),
	),
	'graphic_sale' => array(
		'controller' => 'admin/dep_store/graphic_sale.php',
	),
);
Yii::app()->params['api_conf_models'] =  array_merge(Yii::app()->params['api_conf_models'],$models);
