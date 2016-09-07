<?php
require_once 'Post.php';
require_once 'QueryString.php';
class Request
{
	//POSTパラメータ
	private $_post;
	
	//GETパラメータ
	private $_query;
	
	//コンストラクタ＠
	public function __construct()
	{
		$this->_post = new Post();
		$this->_query = new QueryString();
	}
	
	//POST変数取得
	public function getPost( $key = null )
	{
		if( null == $key ){
			return $this->_post->get();//POST配列を返す
		}
		
//		if( false == $this->_post->has( $key ) ){
//			return null;
//		}
		
		//下記メソッドでPOSTのキー値がない場合はnullを返すため上記if分はコメントアウト
		return $this->_post->get( $key );
	}
	
	public function getQuery( $key = null )
	{
		if( null == $key ){
			return $this->_query->get();//GET配列を返す
		}
//		if( false == $this->_query->has( $key ) ){
//			return null;
//		}
		//下記メソッドでGETのキー値がない場合はnullを返すため上記if分はコメントアウト
		return $this->_query->get( $key );
	}
}
?>