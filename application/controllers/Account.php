<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function profile() 
	{

		if(!$this->session->userdata('user'))
			redirect('account/login');
				
		$this->load->view('app', [
			'data' => [
				'page' => 'customer/account/profile', 
				'content' => [
					'users_customer' => $this->session->userdata('user'),
				]
			]
		]);

	}

	public function orders() 
	{
		
		if(!$this->session->userdata('user'))
			redirect('account/login');
				
		$this->load->view('app', [
			'data' => [
				'page' => 'customer/account/orders', 
				'content' => [
					'users_customer' => $this->session->userdata('user'),
				]
			]
		]);

	}

	public function cart() 
	{
		
		if(!$this->session->userdata('user'))
			redirect('account/login');
				
		$this->load->model('Cart');
		$cart = $this->Cart->get($this->session->userdata('user')->id);

		$this->load->view('app', [
			'data' => [
				'page' => 'customer/account/cart',
				'content' => [
					'cart' => $cart,
				]
			]
		]);

	}

	public function login()
	{
		$this->load->view('app', ['data'=>['page' => 'public/account/login']]);
	}

	public function register()
	{
		$this->load->view('app', ['data'=>['page' => 'public/account/register']]);
	}

	public function logout() {
		$this->session->set_userdata(['user' => null]);
		redirect('');
	}

}
