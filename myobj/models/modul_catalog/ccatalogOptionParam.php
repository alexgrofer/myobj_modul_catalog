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
			'option'=>array(self::BELONGS_TO, 'ccatalogOption', 'id_option'),
		);
	}
	public function rules()
	{
		return array(
			array('codeval', 'required'),
			array('codeval', 'length', 'max'=>225),
			//array('id_option', 'exist','attributeName'=>'id','className'=>'ccatalogOption','allowEmpty'=>false,'on'=>array('update')), //allowEmpty обязателен
		);
	}
	public function attributeLabels() {
		return array(
			'codeval' => 'codeval',
		);
	}
	public function ElementsForm() {
		return array(
			'codeval'=>array(
				'type'=>'text',
			),
		);
	}
}