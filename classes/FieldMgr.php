<?php
class FieldMgr {
	//, QuantityField $quantity
	public static function getField($post, $item) {
		switch ($item['type']) {
			
			case 'text':
			case 'textarea':
				return new TextField($post, $item);
				break;
			
			case 'select':
				return new SelectField($post, $item, $quantity);
				break;
			
			case 'checkbox':
				return new CheckboxField($post, $item, $quantity);
				break;
			
			case 'radio':
				return new RadioField($post, $item, $quantity);
				break;
			
			case 'hidden':
				return new HiddenField($post, $item, $quantity);
				break;
				
			default:
				return false;
		}
	}
}