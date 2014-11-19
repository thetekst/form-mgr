<?php
class RadioField extends Field {
	public function __construct($post, $item, QuantityField $quantity) {
		parent::__construct($post, $item, $quantity);
	}
	
	public function make() {
		return sprintf('RadioField - %s<br>',$quantity->getValue());
	}
}