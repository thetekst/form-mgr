<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

spl_autoload_register(function($class) {
	$path = dirname(__FILE__).'/classes/'.$class.'.php';
	if(is_file($path)) require_once($path);
});

$post = array (
  'nospam:blank' => '',
  'FIRST_NAME' => '',
  'SELECT_COUNTRY' => array ('', 'russia', 'spain'),
  'TEXTAREA' => '',
  'CHECKBOX' => array ('', 'circle', 'triangle'),
  'RADIO' => '',
  'HIDDEN_NAME' => 'hidden_value',
  'FORM_ID' => '1',
);
//unset($post);

$items = array(
	array (
	  'id' => 1,
	  'form_id' => 1,
	  'label' => 'First name',
	  'placeholder' => '',
	  'multiple' => 0,
	  'input_validate' => 1,
	  'input_name' => 'FIRST_NAME',
	  'input_value' => '',
	  'input_default_value' => '',
	  'input_wrapper_tag_id' => 'FIRST_ID_WR',
	  'type' => 'text',
	  'order_id' => 0,
	)/*,
	array (
	  'id' => 3,
	  'form_id' => 1,
	  'label' => 'Pleace select country',
	  'placeholder' => '',
	  'multiple' => 1,
	  'input_validate' => 1,
	  'input_name' => 'SELECT_COUNTRY',
	  'input_value' => 'Russia=russia||Egypt=egypt||Spain=spain||France=france',
	  'input_default_value' => 'spain||france',
	  'input_wrapper_tag_id' => 'COUNTRY_WR',
	  'type' => 'select',
	  'order_id' => 1,
	),
	array (
	  'id' => 2,
	  'form_id' => 1,
	  'label' => 'My textarea',
	  'placeholder' => '',
	  'multiple' => 0,
	  'input_validate' => 1,
	  'input_name' => 'TEXTAREA',
	  'input_value' => 'textarea',
	  'input_default_value' => '',
	  'input_wrapper_tag_id' => 'TEXTAREA_WR',
	  'type' => 'textarea',
	  'order_id' => 2,
	),
	array (
	  'id' => 4,
	  'form_id' => 1,
	  'label' => 'Select shapes',
	  'placeholder' => '',
	  'multiple' => 0,
	  'input_validate' => 0,
	  'input_name' => 'CHECKBOX',
	  'input_value' => 'Circle=circle||Triangle=triangle||Rectangle=rectangle',
	  'input_default_value' => 'triangle||circle',
	  'input_wrapper_tag_id' => 'CHECKBOX_WR',
	  'type' => 'checkbox',
	  'order_id' => 3,
	),
	array (
	  'id' => 5,
	  'form_id' => 1,
	  'label' => 'Select colors',
	  'placeholder' => '',
	  'multiple' => 0,
	  'input_validate' => 0,
	  'input_name' => 'RADIO',
	  'input_value' => 'Red=red||Blue=blue||Black=black',
	  'input_default_value' => 'blue',
	  'input_wrapper_tag_id' => 'RADIO_WR',
	  'type' => 'radio',
	  'order_id' => 4,
	),
	array (
	  'id' => 6,
	  'form_id' => 1,
	  'label' => '',
	  'placeholder' => '',
	  'multiple' => 0,
	  'input_validate' => 0,
	  'input_name' => 'HIDDEN_NAME',
	  'input_value' => 'hidden_value',
	  'input_default_value' => '',
	  'input_wrapper_tag_id' => '',
	  'type' => 'hidden',
	  'order_id' => 5,
	)*/);

foreach($items as $item) {
	
	/*if(isset($post[$item['input_name']])) {
		$isPost =  $post[$key] : ;
	}*/
	
	//$quantity = QuantityMgr::getQuantity($item['quantity']);
	$fieldType = FieldMgr::getField($post, $item);
	
	if($fieldType) {
		
		$fieldThis = $fieldType->make();
		printf('%s',$fieldThis);
	} else {
		printf('unknown type: %s<br>', $item['type']);
	}
	
	
	// printf('type: %s - %s<br>', $type['type'], $quantity->getValue());
}