<?php
class HiddenField extends Field {
	public function __construct($post, $item, QuantityField $quantity) {
		parent::__construct($post, $item, $quantity);
	}
	
	public function make() {
		return sprintf('HiddenField - %s<br>',$quantity->getValue());
	}
}