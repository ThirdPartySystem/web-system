<?php

class BTException extends Exception
{
	// 例外を再定義し、メッセージをオプションではなくする
    public function __construct($message, $code = 0, Exception $previous = null) {
    
        // 全てを正しく確実に代入する
        parent::__construct($message, $code, $previous );
    }
	
	public function errorLogging(){
		$message = "";
		$message .= "発生時刻".date( 'Y年n月d日 H:i:s' , time())."\n";
		$message .= $this->getMessage()."\n";
		$message .= "ファイル名：".$this->getFile()."\n";
		$message .= "列番号：".$this->getLine()."\n\n";
		error_log( $message , 3 , ERROR_LOG_FILE );
		exit();
	}
	
	
}