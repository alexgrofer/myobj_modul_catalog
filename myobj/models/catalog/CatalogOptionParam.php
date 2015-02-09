<?php
class CatalogOptionParam extends AbsBaseModel
{
	public $codeval;
	public $id_option;

	public function tableName()
	{
		return 'setcms_catalog_option_param';
	}
	public function relations()
	{
		return array(
			'option'=>array(self::BELONGS_TO, 'catalogOption', 'id_option'),
		);
	}
	public function defaultRules()
	{
		return array(
			array('codeval', 'required'),
			array('codeval', 'length', 'max'=>225),
		);
	}
	public function defaultAttributeLabels() {
		return array(
			'codeval' => 'codeval',
		);
	}
	public function defaultElementsForm() {
		return array(
			'codeval'=>array(
				'type'=>'text',
			),
		);
	}
}