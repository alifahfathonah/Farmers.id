<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function cart($action = '', $id = '')
	{
		if(!$this->session->userdata('user'))
			redirect('account/login');

		if($action == 'add') {
			
			$this->load->model('Cart');
			$cek = $this->Cart->get($this->session->userdata('user')->id);
			$allow = true;
			if($cek != null)
				foreach($cek as $key => $temp) {
					if($temp->product_id == $id) {
						$allow = false;
					}
				}
			$qty = 1;
			if($allow)
				$query = $this->Cart->insert($id, $qty, $this->session->userdata('user')->id);
				
			$this->session->set_flashdata(['status' => 'success', 'message' => 'Product added to cart !']);
			redirect($_SERVER['HTTP_REFERER']);
		}
			
		$this->load->model('Cart');
		$cart = $this->Cart->get($this->session->userdata('user')->id);

		$this->load->view('app', [
			'data' => [
				'page' => 'public/transaction/cart',
				'content' => [
					'cart' => $cart,
				]
			]
		]);
	}

	public function package_wrap()
	{
		// echo $this->input->post('destination_address');
        $this->load->model('Wrapping_type');
        // $this->load->model('Letter_card');
		// $letter_card = $this->Letter_card->get_admin();
		$wrapping_type = $this->Wrapping_type->get_admin();
		$this->load->view('app', [
			'data' => [
				'page' => 'public/transaction/package_wrap',
				'content' => [
					'wrapping_type' => $wrapping_type,
					// 'letter_card' => $letter_card,
					'form_data' => [
						'destination_address' => $this->input->post('destination_address')
					]
				]
			]
		]);

	}

	public function checkout()
	{
		// echo '<pre>'; print_r($this->input->post());
		// exit;
			
		$this->load->model('Cart');
        $this->load->model('Wrapping_type');
        // $this->load->model('Letter_card');
		$cart = $this->Cart->get($this->session->userdata('user')->id);
		$wrapping_type = $this->Wrapping_type->get($this->input->post('wrapping_type_id'));
		// $letter_card = $this->Letter_card->get($this->input->post('letter_card_id'));
		
		$this->load->view('app', [
			'data' => [
				'page' => 'public/transaction/checkout',
				'content' => [
					'cart' => $cart,
					'wrapping_type' => $wrapping_type,
					// 'letter_card' => $letter_card,
					'form_data' => $this->input->post()
				]
			]
		]);
	}

	public function payment_process($code = '')
	{
		$this->load->model('Cart');
		$this->load->model('Process_order');
		$this->load->model('Process_order_detail');

		$cart = $this->Cart->get($this->session->userdata('user')->id);

		if(count($cart) > 0 && $code == '') {

			$process_order = $this->input->post();
			$process_order['status'] = 0;
			$process_order['user_customer_id'] = $this->session->userdata('user')->id;
			
			$get_process_order_admin = $this->Process_order->get_admin();

			$process_order['code'] = 'PO' . sprintf("%05d", count($get_process_order_admin) + 1);
			$process_order_id = $this->Process_order->insert($process_order);

			foreach($cart as $key => $temp) {
				$this->Process_order_detail->insert($process_order_id, $temp->product_id, 1, $temp->price);
			}

			$this->Cart->delete($this->session->userdata('user')->id);

			redirect('transaction/payment_process/'. $process_order['code']);

		}
		
		$process_order = $this->Process_order->get_by_code($code);
		$process_order_detail = $this->Process_order_detail->get($process_order->id);
		$total = 0;
		foreach($process_order_detail as $key => $temp) {
			$total += $temp->subtotal;
		}
		$process_order->total = $total;
		
		$this->load->view('app', [
			'data' => [
				'page' => 'public/transaction/payment_process',
				'content' => [
					'process_order' => $process_order,
				]
			]
		]);

	}

}
