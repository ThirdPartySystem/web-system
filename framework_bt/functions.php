<?php

function getUrl(){
	return HOME_URL;
}

function errorLoggingToFile( $error_message , $file , $line){
		$message = "";
		$message .= "発生時刻".date( 'Y年n月d日 H:i:s' , time())."\n";
		$message .= $error_message."\n";
		$message .= "ファイル名：".$file."\n";
		$message .= "列番号：".$line."\n\n";
		error_log( $message , 3 , ERROR_LOG_FILE );

}

function createInitialTable( $initial = NULL ){
	$initial_table = "";

	$alphabet_initial_array = array( "A" , "B" , "C" , "D" , "E" , "F" , "G" , "H" , "I" , "J" , "K" , "L" , "M" , "N" , "O" , "P" , "Q" , "R" , "S" , "T" , "U" , "V" , "W" , "X" , "Y" , "Z" , NULL , NULL , NULL ,NULL );
	$row = 6; //行
	$col = 5; //列

	$initial_count = 0;
	$initial_table .= "<table>";
	for( $i = 0; $i < $row; $i++){
		$initial_table .= "<tr>";
		for( $j = 0; $j < $col; $j++ ){
			$initial_table .= "<td>";
			if( $alphabet_initial_array[$initial_count] != NULL ){
				$class = "";
				if(!is_NULL($initial) && $alphabet_initial_array[$initial_count] == $initial){
					$class = "class='push'";
				}
				$initial_table .= "
				<input type='button' onclick='initial_set(\"{$alphabet_initial_array[$initial_count]}\" , this );' name='initial_button'
				value='{$alphabet_initial_array[$initial_count]}' {$class}>";
			}
			$initial_count++;
			$initial_table .= "</td>";
		}
		$initial_table .= "</tr>";
	}
	$initial_table .= "</table>";

	//日本語の接頭語

	$kana_initial_array = array( 
		"あ" , "か" , "さ" , "た" , "な" , "は" , "ま" , "や" , "ら" , "わ" , 
		"い" , "き" , "し" , "ち" , "に" , "ひ" , "み" , NULL , "り" , NULL , 
		"う" , "く" , "す" , "つ" , "ぬ" , "ふ" , "む" , "ゆ" , "る" , "を" , 
		"え" , "け" , "せ" , "て" , "ね" , "へ" , "め" , NULL , "れ" , NULL , 
		"お" , "こ" , "そ" , "と" , "の" , "ほ" , "も" , "よ" , "ろ" , NULL );
	$row = 5; //行
	$col = 10; //列

	$initial_count = 0;
	$initial_table .= "<table>";
	for( $i = 0; $i < $row; $i++){
		$initial_table .= "<tr>";
		for( $j = 0; $j < $col; $j++ ){
			$initial_table .= "<td>";
			if( $kana_initial_array[$initial_count] != NULL ){
				$class = "";

				if(!is_NULL($initial) && $kana_initial_array[$initial_count] == $initial){
					$class = "class='push'";
				}
				$initial_table .= "<input type='button' onclick='initial_set(\"{$kana_initial_array[$initial_count]}\" , this );' name='initial_button' value='{$kana_initial_array[$initial_count]}' {$class}>";
				
			}
			$initial_count++;
			$initial_table .= "</td>";
		}
		$initial_table .= "</tr>";
	}
	$initial_table .= "</table>";

	return $initial_table;
}

function hsc( $string = "" ){
	return htmlspecialchars( $string , ENT_QUOTES , "UTF-8" );
}


?>