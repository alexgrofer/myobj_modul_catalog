<?php
class CatalogCategory extends AbsBaseModel
{
	public $codename;
	public $parent_id=null;

	public function tableName()
	{
		return 'setcms_catalog_category';
	}

	public function relations()
	{
		return array(
			'options'=>array(self::MANY_MANY, 'catalogOption', 'setcms_catalog_category_option(category_id, option_id)'),
		);
	}

	protected function defaultRules() {
		return array(
			array('codename', 'required'),
			array('codename', 'length', 'max'=>225),
			array('parent_id', 'exist',
				'attributeName'=>'id',
				'className'=>get_class($this),'allowEmpty'=>true), //'on'=>array('update') только при обновлении
		);
	}

	public function defaultAttributeLabels() {
		return array(
			'codename' => 'codename',
			'parent_id' => 'parent_id',
		);
	}
	public function defaultElementsForm() {
		return array(
			'codename'=>array(
				'type'=>'text',
			),
			'parent_id'=>array(
				'type'=>'text',
			),
		);
	}
}