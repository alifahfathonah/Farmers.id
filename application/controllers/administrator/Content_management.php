<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content_management extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('user'))
			redirect('administrator/login');

		$this->load->view('app_administrator', ['data'=>['page' => 'administrator/content_management']]);
	}
	
}
