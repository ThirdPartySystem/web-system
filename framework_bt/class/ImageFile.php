<?php
require_once 'File.php';

class ImageFile extends File
{
	public function __construct( $file ){
		parent::__construct( $file );
		$extension = strtolower( pathinfo($file['name'], PATHINFO_EXTENSION) );
		try{
			if( !in_array( $extension , array( 'jpg' , 'jpeg' , 'png' , 'gif' ) ) ){
				throw new BTException("画像ファイルでないものがアップロードされました。拡張子：{$extension}");
			}
		}catch( BTException $bte ){
			$bte->errorLogging();
		}
	}
	
}
?>