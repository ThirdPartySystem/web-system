<?php
//テンプレート用のentityファイル
//コピーして利用して下さい。
class TempEntity extends ModelBaseEntity
{
	
	private $mo_temp_data;
	
	public function __construct()
	{
		require_once(ROOT_PATH."models/data/Temp.php");
	}
}
?>