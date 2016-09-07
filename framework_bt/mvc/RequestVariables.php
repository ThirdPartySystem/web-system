<?php
//リクエスト変数抽象クラス
abstract class RequestVariables
{
	protected $_values;
	
	//コンストラクタ
	public function __construct()
	{
		$this->setValues();
	}
	
	//パラメーター値設定(継承されることを前提)
	abstract protected function setValues();
	
	public function get( $key = null )
	{
		$ret = null;
		if( null == $key ){
			$ret = $this->_values;
		}else{
			if( true == $this->has( $key ) ){
				$ret = $this->_values[$key];
			}
		}
		return $ret;
	}
	
	//指定のキーが存在するか確認
	public function has( $key )
	{
		if( $this->_values == null ){
			return false;
		}
		if( false == array_key_exists( $key , $this->_values )  ){
			return false;
		}
		return true;
	}
}

?>