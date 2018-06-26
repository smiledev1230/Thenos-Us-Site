<?php  
/******************************************************
 * @package Pav Product Tabs module for Opencart 1.5.x
 * @version 1.0
 * @author http://www.pavothemes.com
 * @copyright	Copyright (C) Feb 2012 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license		GNU General Public License version 2
*******************************************************/

class ControllerModulepavmegaproducts extends Controller {

	private $data;

	public function index($setting) {

		static $module = 1;
		
		$this->load->model('catalog/product'); 
 		$this->load->model('pavmegaproducts/product'); 
		$this->load->model('catalog/category'); 
		$this->load->model('tool/image');
		$this->load->language('module/pavmegaproducts');
		
		$this->data['button_cart'] = $this->language->get('button_cart');
		if (file_exists('catalog/view/theme/' . $this->config->get('config_template') . '/stylesheet/pavmegaproducts.css')) {
			$this->document->addStyle('catalog/view/theme/' . $this->config->get('config_template') . '/stylesheet/pavmegaproducts.css');
		} else {
			$this->document->addStyle('catalog/view/theme/default/stylesheet/pavmegaproducts.css');
		}
 
 		$this->document->addScript('catalog/view/javascript/pavmegaproducts/isotope.js');

		if( !isset($setting['category_tabs']) ){
			return ;
		}
 
		$default = array(
			'latest' => 1,
			'limit' => $setting['limit'],
			'cols'	 =>  4,
			'max_page' => 4
		);
		$setting = array_merge( $default, $setting );
		
		$this->data['width'] = $setting['width'];
		$this->data['height'] = $setting['height'];
		$this->data['cols']   = (int)$setting['cols'];
		$this->data['max_page']   = (int)$setting['max_page'];
		$this->data['text_load_more'] = $this->language->get('text_load_more'); 

		$this->data['prefix_class']   = isset($setting['prefix_class'])?$setting['prefix_class']:'';


		$this->data['tabs'] = array();
		

		$data = array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => $setting['limit'],
			'filter_category_ids' => implode( ",", $setting['category_tabs']) 
		);

		$mproducts = array();

	 	$mproducts = $this->getProducts( $this->model_pavmegaproducts_product->getProducts( $data ), $setting );

		foreach( $setting['category_tabs'] as  $key => $categoryID ){
			
			$category = $this->model_catalog_category->getCategory( $categoryID );	
			if( $category ) {
				$data['filter_category_id'] = $categoryID;
				$this->data['tabs'][] = array( 
											   'class' 		   => $setting['class'][$key],
											   'image'		   => $this->model_tool_image->resize( $setting['image'][$key], 45,45 ),
											   'category_name' => $category['name'],
											   'category_id'   => $categoryID
	 
				);
			}
		}

		$this->data['megaproducts'] = $mproducts;
		
		$this->data['catids'] = implode("|", $setting['category_tabs']);

		$this->data['url'] = $this->url;

		$this->data['lang'] = $this->language;

		$this->data['config'] = $this->config;

		$this->data['currency'] = $this->currency;

		$this->data['modulename'] = $setting['name'];

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/pavmegaproducts.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/pavmegaproducts.tpl', $this->data);
		} else {
			return $this->load->view('default/template/module/pavmegaproducts.tpl', $this->data);
		}
	}
	
	private function getProducts( $results, $setting ){
		$products = array();
 
		foreach ($results as $result) {
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				$product_images = $this->model_catalog_product->getProductImages($result['product_id']);
				if(isset($product_images) && !empty($product_images)) {
					$thumb2 = $this->model_tool_image->resize($product_images[0]['image'], $setting['width'], $setting['height']);
				}
			} else {
				$image = false;
			}
						
			if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')));
			} else {
				$price = false;
			}
					
			if ((float)$result['special']) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
				$discount = floor((($result['price']-$result['special'])/$result['price'])*100);
			} else {
				$special = false;
			}
			
			if ($this->config->get('config_review_status')) {
				$rating = $result['rating'];
			} else {
				$rating = false;
			}
			 
			$products[] = array(
				'product_id' => $result['product_id'],
				'thumb'   	 => $image,
				'thumb2'   	 => isset($thumb2)?$thumb2:'',
				'name'    	 => $result['name'],
				'price'   	 => $price,
				'date_added' => $result['date_added'],
				'discount'   => isset($discount)?'-'.$discount.'%':'',
				'special' 	 => $special,
				'rating'     => $rating,
				'description'=> (html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')),
				'reviews'    => sprintf($this->language->get('text_reviews'), (int)$result['reviews']),
				'href'    	 => $this->url->link('product/product', 'path='.$result['category_id'].'&product_id=' . $result['product_id']),
				'category_id'	=> $result['category_id'],
			);
		}
		return $products;
	}
}
?>