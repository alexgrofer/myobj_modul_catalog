<?php
class ccatalogOption extends AbsModel
{
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
}