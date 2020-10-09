<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function product($category)
	{
		$this->load->view('app', ['data'=>['page' => 'public/category']]);
	}
}
