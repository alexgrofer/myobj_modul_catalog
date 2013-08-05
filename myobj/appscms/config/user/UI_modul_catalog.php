<?php
$ui = array(
	//Независимые интерфейсы, к примеру вывести график продаж или другой интерфейс. В контроллере можно организовать шаблон, представление и т.д.
	'graphic_sale' => array(
		'controller' => array('default'=>'admin/dep_store/graphic_sale.php'),
		'groups_read' => null,
		'groups_write' => array('CC99CD08-A1BF-461A-B1FE-3182B24D2812'),
	),
);
Yii::app()->params['api_conf_UI'] =  array_merge(Yii::app()->params['api_conf_UI'],$ui);