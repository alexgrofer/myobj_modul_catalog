<?php
class ccatalogOption extends AbsModel
{
	public $codename;
	public $type;
	public $range;

	public function tableName()
	{
		return 'setcms_ccatalog_option';
	}
	public function relations()
	{
		return array(
			'ccatalogoptionparams'=>array(self::HAS_MANY, 'ccatalogOptionParam', 'id_option'),
		);
	}

	public function rules()
	{
		return array(
			array('codename, type', 'required'),
			array('codename', 'length', 'max'=>225),
			array('type', 'numerical', 'max'=>10, 'integerOnly'=>true), // @todo 1логическое,2множество,3диапазон
			array('range', 'length', 'max'=>225),
		);
	}
	public function attributeLabels() {
		return array(
			'codename' => 'codename', // @todo переводы для админки в текстовом файле, для cms в базе? или все в базе?
		);
	}
	public function ElementsForm() {
		return array(
			'codename'=>array(
				'type'=>'text',
			),
			'type'=>array(
				'type'=>'text', // @todo сделать списком
			),
			'codename'=>array(
				'type'=>'text',
			),
		);
	}
}