<?php
class CatalogOption extends AbsBaseModel
{
	public $name;
	public $type; // булево (да,нет,неважно), чекбокс - список, радио - список, диапазон
	public $conf;

	public function tableName()
	{
		return 'setcms_catalog_option';
	}
	public function relations()
	{
		return array(
			'categories'=>array(self::MANY_MANY, 'catalogCategory', 'setcms_catalog_category_to_option(option_id, category_id)'),
			'params'=>array(self::HAS_MANY, 'catalogOptionParam', 'id_option'),
		);
	}

	public function defaultRules()
	{
		return array(
			array('name, type', 'required'),
			array('name, conf', 'length', 'max'=>225),
			array('type', 'numerical', 'max'=>9, 'integerOnly'=>true),
		);
	}

	public function defaultElementsForm() {
		return array(
			'name'=>array(
				'type'=>'text',
			),
			'type'=>array(
				'type'=>'text',
			),
			'conf'=>array(
				'type'=>'textarea',
			),
		);
	}
}