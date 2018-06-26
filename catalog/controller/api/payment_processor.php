<?php

class ControllerApiPaymentProcessor extends Controller {
	private $error = array();

	public function getTempOrderId() {
		$json = array();
		$this->load->model('api/payment_processor');
		$this->session->data['order_id'] = $this->model_api_payment_processor->getTempOrderId();
		$this->session->data['oe']['order_id'] = $this->session->data['order_id'];
		$json['oe_order_id'] = $this->session->data['order_id'];
		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: *');
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

}

?>