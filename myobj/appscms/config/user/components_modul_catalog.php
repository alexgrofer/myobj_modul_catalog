<?php
$components_user = array(
	'Catalog'=>array(
		'class' =>'MYOBJ.components.catalog.CCatalog',
	),
);

Yii::app()->params['api_conf_components'] =  array_merge_recursive(Yii::app()->params['api_conf_components'],$components_user);
