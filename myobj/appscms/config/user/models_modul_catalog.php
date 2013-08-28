<?php
$models = array(
	//STORE
	'ccatalogCategory' => array(
		'namemodel' => 'ccatalogCategory',
		'relation' => array('options'=>array('options','ccatalogOption')),
		'releate_name' => array('ccatalogCategory'=>'categories'),
	),
	'ccatalogOption' => array(
		'namemodel' => 'ccatalogOption',
		'relation' => array('params'=>'ccatalogOptionParam','categories'=>'ccatalogCategory'),
		'releate_name' => array('CTLoption'=>'option','ccatalogOption'=>'options'),
	),
	'ccatalogOptionParam' => array(
		'namemodel' => 'ccatalogOptionParam',
		'relation' => array('option'=>'CTLoption'),
		'releate_name' => array('ccatalogOptionParam'=>'params'),
	),
	'graphic_sale' => array(
		'controller' => 'admin/dep_store/graphic_sale.php',
	),
	'CTLoption' => 'ccatalogOption',

	'model_catalog' => 'ccatalogCategory',
	'model_catalog_option' => 'ccatalogOption',
	'model_catalog_option_params' => 'ccatalogOptionParam',
);
Yii::app()->params['api_conf_models'] =  array_merge(Yii::app()->params['api_conf_models'],$models);
