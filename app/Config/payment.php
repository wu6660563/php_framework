<?php

return array(
		'state'	=>	[
				'NEW'			=>	'1',		//初始化，第一次进入支付系统
				'PENDING'		=>	'2',		//待支付
				'PROCESSING'	=>	'3',		//支付待确认（线下银行，线下现金）,对应Payu的PENDING
				'EXPIRED'		=>	'4',		//过期（线下银行超过时间变成过期）
				'APPROVED'		=>	'5',		//支付完成
				'REFUNDED'		=>	'6',		//退款
				'ERROR'			=>  '7',		//异常订单
		],
);