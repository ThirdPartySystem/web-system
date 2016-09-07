<?php

class File
{
	protected $m_file_info;
	protected $m_file_name;
	protected $m_file_size;
	protected $m_mime_type;
	protected $m_tmp_name;
	
	public function __construct( $file ){
		if( $file ){
			$this->m_file_info = $file;
			$this->m_file_name = $this->m_file_info['name'];
			$this->m_file_size = $this->m_file_info['size'];
			$this->m_mime_type = $this->m_file_info['type'];
			$this->m_tmp_name = $this->m_file_info['tmp_name'];
		}else{
			return null;
		}
	}
	
	public function getFileName(){
		return $this->m_file_name;
	}
	
	public function getFileSize( $unit = 'B'){
		$unit = strtoupper( $unit );
		$size = (int)$this->m_file_size;
		switch( $unit ){
			case 'B':
			return $size;
			break;
			
			case 'K':
			return ceil( $size / 1024 );
			break;
			
			case 'M':
			return ceil( $size / 1024 / 1024 );
			break;
			
			case 'G':
			return ceil( $size / 1024 / 1024 / 1024 );
			break;
			
			default:
			return $size;
			break;
		}
	}
	
	public function getMimeType(){
		return $this->m_mime_type;
		
	}
	
	public function getTmpName(){
		return $this->m_tmp_name;
	}
	
	public function getExtension(){
		
		$extension = strtolower( pathinfo( $this->m_file_name, PATHINFO_EXTENSION) );
		return $extension;
	}
	public function upload( $upload_dir , $file_name ){
		$upload_file = $upload_dir.$file_name.'.'.$this->getExtension();
		return move_uploaded_file( $this->m_tmp_name , $upload_file);
	}
}
?>