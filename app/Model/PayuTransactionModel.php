<?php
namespace App\Model;


class PayuTransactionModel extends PaymentBaseModel {

	protected function init() {
		$this->tableName = 'payu_transaction';
	}

}
