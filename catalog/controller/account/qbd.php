<?php
class ControllerAccountQbd extends Controller {

	public function qbwc() {
		$this->registry->set('qbdc',new Wkqbdc($this->registry));

		$this->qbdc->do_authenticate();
	}

	public function syncronize_customer($root = false) {

		$this->load->model('account/customer');

		if($this->config->get('wk_qbdc_status') && $this->config->get('wk_qbdc_server_name') && $this->config->get('wk_qbdc_server_desc') && $this->config->get('wk_qbdc_username') && $this->config->get('wk_qbdc_password') && $this->config->get('wk_qbdc_scheduler')){

			$this->registry->set('qbdc',new Wkqbdc($this->registry));

			$results = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

			if(isset($results['customer_id']) && $results['customer_id']){
				$qbdc_counter = $this->qbdc->qbdc_syncCustomer($this->qbdc->getCustomerDetails($results['customer_id']));
			}
		}
	}

	public function syncronize_order($route = array(), $request = array() ,$order_id = null) {

		if (!$order_id && isset($request[0]) && $request[0]) {
	    $order_id = $request[0];
	  } elseif (isset($this->session->data['order_id']) && $this->session->data['order_id']) {
	  	$order_id = $this->session->data['order_id'];
	  }

	  $qbdc_counter = 0;

	  if($this->config->get('wk_qbdc_status') && $this->config->get('wk_qbdc_server_name') && $this->config->get('wk_qbdc_server_desc') && $this->config->get('wk_qbdc_username') && $this->config->get('wk_qbdc_password') && $this->config->get('wk_qbdc_scheduler')){

	    if(isset($order_id) && $order_id){
				$this->registry->set('qbdc',new Wkqbdc($this->registry));

	      $qbdc_counter = $this->qbdc->qbdc_syncOrder($this->qbdc->getOrderDetails($order_id, 1));
	    }
	  }
	}
}
