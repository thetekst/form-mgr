<?php
class CheckboxField extends Field {
	public function __construct($post, $item, QuantityField $quantity) {
		parent::__construct($post, $item, $quantity);
	}
	
	public function make() {
		return sprintf('CheckboxField - %s<br>',$quantity->getValue());
	}
}