<?php
class TextField extends Field {
	public function __construct($post, $item) {
		parent::__construct($post, $item);
	}
	
	public function make() {
		$tmp = 'TextField';
		$selectInputName = $this->selectInputName();
		$this->getQuantity();
		return $tmp;
	}
}