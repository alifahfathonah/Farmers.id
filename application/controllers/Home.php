<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
        $this->load->model('Content_management');
        $this->load->model('Category');
		$banner = $this->Content_management->get_public();
		$category = $this->Category->get_admin();

		$this->load->view('app', [
			'data' => [
				'page' => 'public/home', 
				'content' => [
					'banner' => $banner,
					'category' => $category,
				]
			]
		]);

	}

}
