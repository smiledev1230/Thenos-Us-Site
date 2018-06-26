<?php

class ControllerApiOptfeedisc extends Controller {
	private $error = array();

	public function setup() {
		$this->load->language('total/optfeedisc');
		$json = array();
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		} else {
			if (isset($this->request->post['optfeedisc_fee']) && $this->request->post['optfeedisc_fee'] != '') {
				$pos = strpos($this->request->post['optfeedisc_fee'], "(");
				$title = trim(substr($this->request->post['optfeedisc_fee'], 0, $pos - 1));
				$amount = trim(substr($this->request->post['optfeedisc_fee'], $pos));
				$amount = str_replace("(", "", $amount);
				$amount = str_replace(")", "", $amount);
				if (strpos($this->request->post['optfeedisc_fee'], "%") !== false) {
					$fixed_percent = 1;
				} else {
					$fixed_percent = 0;
				}
				$this->session->data['oe']['optional_fee'] = array(
					'fee_discount'	=> 0,
					'title'			=> $title,
					'fixed_percent'	=> $fixed_percent,
					'amount'		=> $amount
				);
			}
			if (isset($this->request->post['optfeedisc_discount']) && $this->request->post['optfeedisc_discount'] != '') {
				$pos = strpos($this->request->post['optfeedisc_discount'], "(");
				$title = trim(substr($this->request->post['optfeedisc_discount'], 0, $pos - 1));
				$amount = trim(substr($this->request->post['optfeedisc_discount'], $pos));
				$amount = str_replace("(", "", $amount);
				$amount = str_replace(")", "", $amount);
				if (strpos($this->request->post['optfeedisc_discount'], "%") !== false) {
					$fixed_percent = 1;
				} else {
					$fixed_percent = 0;
				}
				$this->session->data['oe']['optional_discount'] = array(
					'fee_discount'	=> 1,
					'title'			=> $title,
					'fixed_percent'	=> $fixed_percent,
					'amount'		=> $amount
				);
			}
		}
		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: *');
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function setFee() {
		$this->load->language('total/optfeedisc');
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		} else {
			if ($this->request->post['optfeedisc_fee'] != '') {
				if (strpos($this->request->post['optfeedisc_fee'], "(") === false || strpos($this->request->post['optfeedisc_fee'], ")") === false) {
					$json['error'] = $this->language->get('error_fee_format');
				} else {
					$pos = strpos($this->request->post['optfeedisc_fee'], "(");
					$title = trim(substr($this->request->post['optfeedisc_fee'], 0, $pos - 1));
					$amount = trim(substr($this->request->post['optfeedisc_fee'], $pos));
					$amount = str_replace("(", "", $amount);
					$amount = str_replace(")", "", $amount);
					if (strpos($this->request->post['optfeedisc_fee'], "%") !== false) {
						$fixed_percent = 1;
					} else {
						$fixed_percent = 0;
					}
					$this->session->data['oe']['optional_fee'] = array(
						'fee_discount'	=> 0,
						'title'			=> $title,
						'fixed_percent'	=> $fixed_percent,
						'amount'		=> $amount
					);
					$json['success'] = $this->language->get('text_set_fee');
				}
			} else {
				$json['success'] = $this->language->get('text_clear_fee');
				unset($this->session->data['oe']['optional_fee']);
			}
		}
		if (isset($this->request->server['HTTP_ORIGIN'])) {
			$this->response->addHeader('Access-Control-Allow-Origin: *');
			$this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
			$this->response->addHeader('Access-Control-Max-Age: 1000');
			$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	public function setDiscount() {
		$this->load->language('total/optfeedisc');
		if (!isset($this->session->data['api_id'])) {
			$json['error']['warning'] = $this->language->get('error_permission');
		} else {
			if ($this->request->post['optfeedisc_discount'] != '') {
				if (strpos($this->request->post['optfeedisc_discount'], "(") === false || strpos($this->request->post['optfeedisc_discount'], ")") === false) {
					$json['error'] = $this->language->get('error_discount_format');
				} else {
					$pos = strpos($this->request->post['optfeedisc_discount'], "(");
					$title = trim(substr($this->request->post['optfeedisc_discount'], 0, $pos - 1));
					$amount = trim(substr($this->request->post['optfeedisc_discount'], $pos));
					$amount = str_replace("(", "", $amount);
					$amount = str_replace(")", "", $amount);
					if (strpos($this->request->post['optfeedisc_discount'], "%") !== false) {
						$fixed_percent = 1;
					} else {
						$fixed_percent = 0;
					}
					$this->session->data['oe']['optional_discount'] = array(
						'fee_discount'	=> 1,
						'title'			=> $title,
						'fixed_percent'	=> $fixed_percent,
						'amount'		=> $amount
					);
					$json['success'] = $this->language->get('text_set_discount');
				}
			} else {
				$json['success'] = $this->language->get('text_clear_discount');
				unset($this->session->data['oe']['optional_discount']);
			}
		}
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