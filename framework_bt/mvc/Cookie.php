<?php


//POST変数クラス
class Cookie
{

	public function setCookie( $key , $value , $time = NULL ){
		setcookie( $key, $value , $time );
	}

	public function getCookie( $key ){
		if( $this->hasCookie( $key ) ){
			return $_COOKIE[$key];
		}else{
			return NULL;
		}
	}

	public function hasCookie( $key ){
		if( array_key_exists( $key , $_COOKIE ) === false ){
			return false;
		}
		return true;
	}

	public function deleteCookie( $key ){
		setcookie($key, "" , time() - 3600 );
	}

	public function disp(){
		var_dump($_COOKIE);
	}
}
?>