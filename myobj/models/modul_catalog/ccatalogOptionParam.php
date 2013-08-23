<?php
class ccatalogOptionParam extends AbsModel
{
	public $codeval;
	public $id_option;

	public function tableName()
	{
		return 'setcms_ccatalog_option_params';
	}
	public function relations()
	{
		return array(
			'ccatalogoption'=>array(self::HAS_ONE, 'ccatalogOption', 'id_option'),
		);
	}
	public function rules()
	{
		return array(
			array('codeval', 'required'),
			array('codeval', 'length', 'max'=>225),
			array('id_option', 'exist',
				'attributeName'=>'id',
				'className'=>'ccatalogOption','allowEmpty'=>false), //allowEmpty обязателен
		);
	}
	public function attributeLabels() {
		return array(
			'codeval' => 'codeval',
			'id_option' => 'id_option',
		);
	}
	public function ElementsForm() {
		return array(
			'codeval'=>array(
				'type'=>'text',
			),
			'id_option'=>array(
				'type'=>'text',
			),
		);
	}
}