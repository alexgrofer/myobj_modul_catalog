<?php
$models = array(
	//STORE
	'ccatalogCategory' => array(
		'namemodel' => 'ccatalogCategory',
		'relation' => array('options'=>array('ccatalogOption','categories'))
	),
	'ccatalogOption' => array(
		'namemodel' => 'ccatalogOption',
		'relation' => array('params'=>array('ccatalogOptionParam','option'),'categories'=>array('ccatalogCategory','options'))
	),
	'ccatalogOptionParam' => array(
		'namemodel' => 'ccatalogOptionParam',
		'relation' => array('option'=>array('ccatalogOption','params'))
	),
	'graphic_sale' => array(
		'controller' => 'admin/dep_store/graphic_sale.php',
	),
);
Yii::app()->params['api_conf_models'] =  array_merge(Yii::app()->params['api_conf_models'],$models);
