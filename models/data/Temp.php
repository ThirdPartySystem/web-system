<?php
//テンプレート用のdataファイル
//コピーして利用して下さい。
class Temp extends ModelBaseData{
	public function __construct(){
		parent::__construct();
		require_once(ROOT_PATH."models/table/PageTable.php");
	}
	
	//select文
	public function select( $num ){
		$sql = "SELECT *
					FROM temp
					WHERE  1
					ORDER BY column
					LIMIT ;num";
		$stm = $this->db->prepare( $sql );
		$stm->bindParam( ':num' , $num , PDO::PARAM_INT);
		$stm->execute();
		return $stm->fetchAll( PDO::FETCH_ASSOC );
	}
	
	
	public function insert( )
	{
		
		$sql = "INSERT INTO temp(`column1`, `column2`, `column3`)
					VALUES (:column1, :column2 , :column3 )";
		
		//pageTableObjのget関数を直接bindParam引数に使った場合、動作には問題はないがエラーが出る
		$stm = $this->db->prepare( $sql );
		$stm->execute();
		return $this->db->lastInsertId();
	}
	
	public function update( )
	{
		
		
		$page_id = $pageTableObj->getId();
		$original_page_id = $pageTableObj->getOriginalPageId();
		$publish = $pageTableObj->getPublish();
		$update_time = $pageTableObj->getUpdateTime();
		$title = $pageTableObj->getTitle();
		$content_html = $pageTableObj->getContentHtml();
		$content_text = $pageTableObj->getContentText();
		$change_summary = $pageTableObj->getChangeSummary();
		
		$sql = "UPDATE `page` 
					SET `column1` = :column1 , 
						  `column2` = :column2 , 
						  `column3` = :column3 
					WHERE id = :id";
					
		$stm = $this->db->prepare( $sql );
		$stm->execute();
	}
	
}
?>