<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function product($category)
	{
        $this->load->model('Product');
        $this->load->model('Category');
		$product = $this->Product->get_by_category($category);
		$category = $this->Category->get($category);
		$this->load->view('app', [
			'data' => [
				'page' => 'public/category', 
				'content' => [
					'product' => $product,
					'category' => $category,
				]
			]
		]);


	}
}
