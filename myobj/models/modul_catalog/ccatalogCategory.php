<?php
class ccatalogCategory extends AbsModel
{
	public function tableName()
	{
		return 'setcms_ccatalog_category';
	}
	public function relations()
	{
		return array(
			'ccatalogoption'=>array(self::MANY_MANY, 'ccatalogOption', 'setcms_ccatalog_category_option(category_id, option_id)'),
		);
	}

}