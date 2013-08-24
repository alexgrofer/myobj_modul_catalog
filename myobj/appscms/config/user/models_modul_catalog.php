<?php
$models = array(
	//STORE
	'ccatalogCategory' => array(
		'namemodel' => 'ccatalogCategory',
		'relation' => array('ccatalogOption'),
	),
	'ccatalogOption' => array(
		'namemodel' => 'ccatalogOption',
		'relation' => array('ccatalogOptionParam','ccatalogCategory'),
	),
	'ccatalogOptionParam' => array(
		'namemodel' => 'ccatalogOptionParam',
		'relation' => array('ccatalogOption'),
	),
	'graphic_sale' => array(
		'controller' => 'admin/dep_store/graphic_sale.php',
	),

	//alias
	'model_catalog' => 'ccatalogCategory',
	'model_catalog_option' => 'ccatalogOption',
	'model_catalog_option_params' => 'ccatalogOptionParam',
);
Yii::app()->params['api_conf_models'] =  array_merge(Yii::app()->params['api_conf_models'],$models);
