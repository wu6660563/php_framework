<?php
namespace App\Controller;

use App\Model\OrderModel;
use App\Model\RequestModel;
use App\Model\PayuRequestSubmitModel;
use App\Model\PayuTransactionModel;
/**
 * 
 * ClassName OrderController
 * 
 * @author Nick
 * @Date 2016年1月28日 下午5:12:31
 * @version 1.0
 *
 */

class OrderController extends BaseController {
	
	public function indexAction() {
		$post = $this->request->getPost();
		
 		$filter = array();
		if(isset($post['state']) && $post['state'] != ''&& $post['state'] != 0) {
			$filter['state'] = $post['state'];
		}
		if(isset($post['start_date']) && $post['start_date'] != '') {
			$filter['modify_time__gte'] = $post['start_date'];
		}
		if(isset($post['end_date']) && $post['end_date'] != '') {
			$filter['modify_time__lte'] = $post['end_date'];
		}
		
		$orders = OrderModel::getInstance()->select(null, $filter, ['modify_time'=>'DESC']);
		/**
		 * 根据$order查出referenceCode
		 *  1 - 如果有多条，只取成功的最新一条
		 *  2 - 如果有一条，则查出一条
		 *  3 - 如果没有，则不显示
		 */
		foreach ($orders as $key => $val) {
			$requestModels = RequestModel::getInstance()->select(null, array(
					'transaction_id'		=>	$val['id'],
			), array(
					'id'					=>	'DESC'
			));
			if(isset($requestModels) && count($requestModels) > 0) {
				$requestModel = $requestModels[0];
				$submitModels = PayuRequestSubmitModel::getInstance()->select(null, array(
						'request_id'		=>	$requestModel['id']
				), array(
						'id'				=>	'DESC'
				));
				if(isset($submitModels) && count($submitModels) > 0) {
					$transactionModels = PayuTransactionModel::getInstance()->select(null, array(
							'payu_submit_id'	=>	$submitModels[0]['id'],
					), array(
							'id'				=>	'DESC'
					));
					if(isset($transactionModels) && count($transactionModels) > 0) {
						$val['reference_code'] = $transactionModels[0]['reference_code'];
						$val['payu_order_id'] = $transactionModels[0]['payu_order_id'];
						$orders[$key] = $val;
					}
				}
				
			}
		}
		
		
		
		$this->assign(array(
				'orders'		=>	$orders,
				'state'			=>	isset($post['state']) ? $post['state'] : '',
				'start_date'	=>	isset($post['start_date']) ? $post['start_date'] : '',
				'end_date'		=>	isset($post['end_date']) ? $post['end_date'] : '',
		));
		$this->display();
	}
	
	public function editAction() {
		$query = $this->request->getQuery();
		if(isset($query['id'])) {
			$order = OrderModel::getInstance()->getRow(array(
					'id'		=>	$query['id']
			));
			$this->assign($order);
			\var_dump($order);
		} else {
			$this->redirect(URL('order/index'));
		}
	}
	
}