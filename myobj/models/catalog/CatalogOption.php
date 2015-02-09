<?php
class CatalogOption extends AbsBaseModel
{
	public $codename;
	public $type;
	public $range;

	public function tableName()
	{
		return 'setcms_catalog_option';
	}
	public function relations()
	{
		return array(
			'params'=>array(self::HAS_MANY, 'catalogOptionParam', 'id_option'),
			'categories'=>array(self::MANY_MANY, 'catalogCategory', 'setcms_catalog_category_to_option(option_id, category_id)'),
		);
	}

	public function defaultRules()
	{
		return array(
			array('codename, type', 'required'),
			array('codename', 'length', 'max'=>225),
			array('type', 'numerical', 'max'=>10, 'integerOnly'=>true),
			array('range', 'length', 'max'=>225),
		);
	}
	public function defaultAttributeLabels() {
		return array(
			'codename' => 'codename',
		);
	}
	public function defaultElementsForm() {
		return array(
			'codename'=>array(
				'type'=>'text',
			),
			'type'=>array(
				'type'=>'text',
			),
			'codename'=>array(
				'type'=>'text',
			),
		);
	}
}