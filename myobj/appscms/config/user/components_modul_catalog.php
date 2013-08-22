<?php
$components_user = array(
	'CCatalog'=>array(
		'class' =>'application.modules.myobj.components.ccatalog.CCatalog',
	),
);

Yii::app()->params['api_conf_components'] =  array_merge_recursive(Yii::app()->params['api_conf_components'],$components_user);
