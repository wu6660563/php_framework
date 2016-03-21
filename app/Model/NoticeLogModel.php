<?php
namespace App\Model;


class NoticeLogModel extends PaymentBaseModel {

	protected function init() {
		$this->tableName = 'notice_log';
	}

}
