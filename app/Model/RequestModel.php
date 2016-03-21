<?php
namespace App\Model;

use Core\Model;

class RequestModel extends PaymentBaseModel {

	protected function init() {
		$this->tableName = 'request';
	}

}
