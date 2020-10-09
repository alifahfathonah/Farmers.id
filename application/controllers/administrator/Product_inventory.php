<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_inventory extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('user'))
			redirect('administrator/login');
			
		$this->load->model('Category');
		$category = $this->Category->get_admin();

		$this->load->view('app_administrator', [
			'data' => [
				'page' => 'administrator/product_inventory',
				'content' => [
					'category' => $category,
				]
			]
		]);
	}

}
