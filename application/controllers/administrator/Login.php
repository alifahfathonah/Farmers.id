<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->input->post('username')) {
			$this->load->model('Users_admin');
			$login = $this->Users_admin->login($this->input->post('username'), $this->input->post('password'));
			if($login) {
				$this->session->set_userdata(['user' => $login]);
				redirect('administrator/dashboard');
			} else {
				redirect('administrator/login');
			}
		}
		$this->load->view('app', ['data'=>['page' => 'administrator/login']]);
	}

}
