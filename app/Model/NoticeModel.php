<?php
namespace App\Model;


class NoticeModel extends PaymentBaseModel {

	protected function init() {
		$this->tableName = 'notice';
	}

}
