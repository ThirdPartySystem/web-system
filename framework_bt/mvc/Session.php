<?php

//SESSION変数クラス
class Session
{
	
	public function __construct(){
		if( !isset($_SESSION) ) {
		  session_start();
		}
	}
	
	public function setValues( $key , $value )
	{
		$_SESSION[$key] = $value;
	}
	
	public function getValues( $key  )
	{
		return $_SESSION[$key];
	}
	
	public function hasValues( $key  )
	{
		return array_key_exists ( $key , $_SESSION );
	}
	
	public function setCheck( $key )
	{
		return isset( $_SESSION[$key] );
	}
	
	protected function sessionDestruction(){
		// セッション変数を全て解除する
		$_SESSION = array();
		// セッションを切断するにはセッションクッキーも削除する。
		// Note: セッション情報だけでなくセッションを破壊する。
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time()-42000, '/');
		}
		
		
		// 最終的に、セッションを破壊する
		session_destroy();
		
	}
	
}
?>