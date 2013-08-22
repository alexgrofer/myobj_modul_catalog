<?php
class ccatalogOptionParam extends AbsModel
{
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
}