<?php

abstract class ModelBaseEntity
{
	protected $wf;
	//コンストラクタ
	public function __construct()
	{
		$this->wF = new WebFunction();
	}
	
}
?>