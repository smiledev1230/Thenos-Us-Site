<?php

class ModelTotalOptfeedisc extends Model {

	public function getTotal(&$total_data, &$total, &$taxes) {
		if (isset($this->session->data['oe']['optional_fee'])) {
			$this->load->language('total/optfeedisc');
			$fee_amt = str_replace("(", "", $this->session->data['oe']['optional_fee']['amount']);
			$fee_amt = str_replace(")", "", $fee_amt);
			if (strpos($fee_amt, "%") !== false) {
				$subtotal = $this->cart->getSubTotal();
				$fee_amt = str_replace("%", "", $fee_amt);
				$fee_amt = $subtotal / 100 * $fee_amt;
			}
			$total_data[] = array(
				'code'			=> 'optfeedisc',
				'title'			=> sprintf($this->language->get('text_optfeedisc'), $this->session->data['oe']['optional_fee']['title']),
				'value'			=> $fee_amt,
				'sort_order'	=> $this->config->get('optfeedisc_fee_sort_order')
			);
			if ($this->config->get('optfeedisc_tax_class_id')) {
				$tax_rates = $this->tax->getRates($fee_amt, $this->config->get('optfeedisc_tax_class_id'));
				foreach ($tax_rates as $tax_rate) {
					if (!isset($taxes[$tax_rate['tax_rate_id']])) {
						$taxes[$tax_rate['tax_rate_id']] = $tax_rate['amount'];
					} else {
						$taxes[$tax_rate['tax_rate_id']] += $tax_rate['amount'];
					}
				}
			}
			$total += $fee_amt;
		}
		if (isset($this->session->data['oe']['optional_discount'])) {
			$this->load->language('total/optfeedisc');
			$disc_amt = str_replace("(", "", $this->session->data['oe']['optional_discount']['amount']);
			$disc_amt = str_replace(")", "", $disc_amt);
			$total_discount = 0;
			if (strpos($disc_amt, "%") !== false) {
				$percentage = str_replace("%", "", $disc_amt);
				foreach ($this->cart->getProducts() as $product) {
					$discount = $product['total'] / 100 * $percentage;
					if ($product['tax_class_id']) {
						$tax_rates = $this->tax->getRates($product['total'] - ($product['total'] - $discount), $product['tax_class_id']);
						foreach ($tax_rates as $tax_rate) {
							$taxes[$tax_rate['tax_rate_id']] -= $tax_rate['amount'];
						}
					}
					$total_discount += $discount;
				}
				$disc_amt = $total_discount;
			} else {
				$sub_total = $this->cart->getSubTotal();
				foreach ($this->cart->getProducts() as $product) {
					$discount = $disc_amt * ($product['total'] / $sub_total);
					if ($product['tax_class_id']) {
						$tax_rates = $this->tax->getRates($product['total'] - ($product['total'] - $discount), $product['tax_class_id']);
						foreach ($tax_rates as $tax_rate) {
							$taxes[$tax_rate['tax_rate_id']] -= $tax_rate['amount'];
						}
					}
					$total_discount += $discount;
				}
				$disc_amt = $total_discount;
			}
			$total_data[] = array(
				'code'			=> 'optfeedisc',
				'title'			=> sprintf($this->language->get('text_optfeedisc'), $this->session->data['oe']['optional_discount']['title']),
				'value'			=> -$disc_amt,
				'sort_order'	=> $this->config->get('optfeedisc_discount_sort_order')
			);
			$total -= $disc_amt;
		}
	}

}

?>