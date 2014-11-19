<?php
abstract class Field {
	private $quantity		= null,
			$post			= null,
			$item			= null,
			$defaultValue 	= null;
	
	public function __construct($post, $item) {
		//$this->quantity = $quantity;
		$this->post 	= $post;
		$this->item		= $item;
	}
	
	public function isPost() {
		return isset($this->post[$this->item['input_name']]) ? $this->post[$this->item['input_name']] : $this->item['input_name'];
	}
	
	public function selectInputName() {
		$this->isPost();
		return $this->defaultValue;
	}
	
	abstract public function make();
	
	public function getQuantity($quantity) {
		return QuantityMgr::getQuantity($this);
	}
}