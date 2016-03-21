<?php
namespace App\Model;


class PayuRequestSubmitModel extends PaymentBaseModel {

	protected function init() {
		$this->tableName = 'payu_request_submit';
	}

}
