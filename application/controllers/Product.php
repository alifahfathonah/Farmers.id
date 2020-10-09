<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function view()
	{
		$this->load->view('app', ['data'=>['page' => 'public/product']]);
	}
}
