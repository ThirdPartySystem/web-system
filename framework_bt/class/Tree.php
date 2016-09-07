<?php

class Tree{
	
	protected $root;
	protected $listInnerBeforeHtml = "";
	protected $listInnerAfterHtml = "";
	protected $titleBeforeHtml = "";
	protected $titleAfterHtml = "";
	
	//ノードからツリーのルートを作成
	public function __construct(  ){
		$this->root = new Node( 0 , 'ROOT' , NULL );
	}
	
	public function getTree(){
		return $this->root;
	}
	
	public function setListInnerBeforeHtml( $value ){
		$this->listInnerBeforeHtml = $value;
	}
	
	public function setListInnerAfterHtml( $value ){
		$this->listInnerAfterHtml = $value;
	}
	
	public function setTitleBeforeHtml( $value ){
		$this->titleBeforeHtml = $value;
	}
	
	public function setTitleAfterHtml( $value ){
		$this->titleAfterHtml = $value;
	}
	
	public function insertNode( $node ){
		$insert_flag = false;
		$this->insert( $node , $this->root , $insert_flag );
		return $insert_flag;
	}
	
	public function insertNodeArray( $nodes ){
		do{
			$loop_befor_num = count( $nodes );
			$node_num = $loop_befor_num;
			//echo "挿入ループ前のノード数".$loop_befor_num.'<br>';
			$i =0;
			while( $i < $node_num ){
				//echo "現在のノードの数：".$node_num.'<br>';
				//echo $i.'.';
				if( $this->insertNode( $nodes[$i]  ) ){
					array_splice( $nodes , $i , 1 );
					$node_num--;
				}else{
					$i++;
				}
			}
			$loop_after_num = count( $nodes );
			//echo "挿入ループ後のノード数".$loop_after_num.'<br>';
			if( $loop_after_num == $loop_befor_num || $loop_after_num == 0)break;
		}while( 1 );
	}
	
	public function insert( $insert_node , &$root  , &$insert_flag){
		//現在のノードが挿入するノードならば挿入する
		//echo $root->getValue().'=>';
		if( $insert_node->getParentId() == $root->getId() ){
			$root->setChild( $insert_node );
			$insert_flag = true;
			return;
		}
		foreach( $root->getChilds() as $child_node ){
			$this->insert( $insert_node , $child_node , $insert_flag);
			if( $insert_flag === true ) break;
		}
		return;
	}
	
	public function disp( &$root = NULL  , $level = 0 , &$value = ""){
		if( is_null( $root ) ) $root = $this->root;
		$child_num = count( $root->getChilds() );
		if( $level != 0 ){
			$value.= "<li class='level{$level}'>".$listInnerBeforeHtml.$titleBeforeHtml.$root->getValue().$titleAfterHtml;
		}
		$level++;
		
		if( $child_num > 0 ){
			$value.= "<ul class='level{$level}'>";
			foreach( $root->getChilds() as $child_node ){
				$this->getHtmlList( $child_node  , $level , $value);
			}
			$value.= '</ul>';
		}
		if( $level != 1 ){
			$value.= $listInnerAfterHtml."</li>";
		}
		return $value;
		
	}

		
	
}

?>