<?php


class Node{
	private $id;
	private $parent_id;
	private $value;
	private $childs;
	
	
	function __construct( $id , $value , $parent , $childs = array() ){
		$this->id = $id;
		$this->parent_id =  $parent;
		$this->value = $value;
		$this->childs = $childs;
		
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getParentId(){
		return $this->parent_id;
	}
	
	public function getValue(){
		return $this->value;
	}
	public function getChilds(){
		return $this->childs;
	}
	

	public function setChild( $node ){
		array_push( $this->childs , $node );
	}
	
	
}

?>