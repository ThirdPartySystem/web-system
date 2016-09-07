<?php
class WebFunction{
	public function __construct(){
	}
	
	public function htmlSpecialCharsEscape( $str = "" ){
		return htmlspecialchars( $str , ENT_QUOTES );
	}
	
	public function randString( $length = 8 ){
		$rand_str = "";
		$rand_array = str_split(sha1(uniqid(rand(), true) ) );
		$array_length = count( $rand_array );
		for( $i = 0; $i < $length; $i++ ){
			$rand_str .=$rand_array[ rand( 0 , $array_length ) ];
		}
		return $rand_str;
	}
}
?>