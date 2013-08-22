<?php
$models = array(
	//STORE
	'ccatalog' => array(
		'namemodel' => 'ccatalogCategory',
		'relation' => array('ccatalogoption'),
	),
	'ccatalogoption' => array(
		'namemodel' => 'ccatalogOption',
		'relation' => array('ccatalogoptionparams'),
	),
	'ccatalogoptionparams' => array(
		'namemodel' => 'ccatalogOptionParam',
	),
	'graphic_sale' => array(
		'controller' => 'admin/dep_store/graphic_sale.php',
	),
);
Yii::app()->params['api_conf_models'] =  array_merge(Yii::app()->params['api_conf_models'],$models);
