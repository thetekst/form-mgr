<?php
class QuantityMgr {
	public static function getQuantity($quantity) {
		return is_array($quantity) ? new MultipleField : new SingleField();
	}
}
