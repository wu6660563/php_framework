<?php
namespace App\Model;


class OrderModel extends PaymentBaseModel {
	
	protected function init() {
		$this->tableName = 'order';
    }
	
}
