<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function view($id)
	{
        $this->load->model('Product');
        $this->load->model('Category');
		$product = $this->Product->get($id);
		$category = $this->Category->get($product->category_id);
		$product_by_category = $this->Product->get_by_category($product->category_id);
		$this->load->view('app', [
			'data' => [
				'page' => 'public/product', 
				'content' => [
					'product' => $product,
					'category' => $category,
					'product_by_category' => $product_by_category,
				]
			]
		]);
	}
}
