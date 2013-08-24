<?php
class ccatalogCategory extends AbsModel
{
	public $codename;
	public $parent_id=null;

	public function tableName()
	{
		return 'setcms_ccatalog_category';
	}

	public function relations()
	{
		return array(
			'ccatalogOption'=>array(self::MANY_MANY, 'ccatalogOption', 'setcms_ccatalog_category_option(category_id, option_id)'),
		);
	}
	public function rules()
	{
		return array(
			array('codename', 'required'),
			array('codename', 'length', 'max'=>225),
			array('parent_id', 'exist',
				'attributeName'=>'id',
				'className'=>get_class($this),'allowEmpty'=>true),
		);
	}
	public function attributeLabels() {
		return array(
			'codename' => 'codename',
			'parent_id' => 'parent_id',
		);
	}
	public function ElementsForm() {
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