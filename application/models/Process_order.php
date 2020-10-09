<?php
class Process_order extends CI_Model {

    var $CI;

    public $status = [
        'waiting for payment',
        'packing',
        'on delivery',
        'received',
    ];

	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }
    
    public function insert($data) {

        $this->db->insert('process_order', $data);
        return $this->db->insert_id();

    }

    public function update_payment_image($id, $payment_image) {
        
        $this->db->where('id', $id);
        $this->db->update('process_order', [
            'payment_image' => $payment_image,
        ]);

    }

    public function update_status($id, $status) {
        
        $this->db->where('id', $id);
        $this->db->update('process_order', [
            'status' => $status,
        ]);

    }
    
    public function get($id) {

        $this->db->where("id", $id);
        $this->db->from("process_order");
        $data = $this->db->get()->row();
        return $data;
        
    }

    public function get_by_code($code) {

        $this->db->where("code", $code);
        $this->db->from("process_order");
        $data = $this->db->get()->row();
        return $data;
        
    }

    public function get_admin() {

        $this->db->select('po.*, uc.full_name as user_customer_name, wt.name as wrapping_type_name');
        $this->db->join('users_customer uc', 'po.user_customer_id = uc.id');
        $this->db->join('wrapping_type wt', 'po.wrapping_type_id = wt.id');
        $this->db->from("process_order po");
        $data = $this->db->get()->result();
        return $data;
        
    }

    public function get_by_user() {

        $this->db->select('po.*, uc.full_name as user_customer_name, wt.name as wrapping_type_name');
        $this->db->join('users_customer uc', 'po.user_customer_id = uc.id');
        $this->db->join('wrapping_type wt', 'po.wrapping_type_id = wt.id');
        $this->db->where('po.user_customer_id', $this->session->userdata('user')->id);
        $this->db->from("process_order po");
        $data = $this->db->get()->result();
        return $data;
        
    }

    public function get_by_user_wait_payment() {

        $this->db->select('po.*, uc.full_name as user_customer_name, wt.name as wrapping_type_name');
        $this->db->join('users_customer uc', 'po.user_customer_id = uc.id');
        $this->db->join('wrapping_type wt', 'po.wrapping_type_id = wt.id');
        $this->db->where('po.user_customer_id', $this->session->userdata('user')->id);
        $this->db->where('payment_image', null);
        $this->db->from("process_order po");
        $data = $this->db->get()->result();
        return $data;
        
    }

    public function get_wait_verification() {

        $this->db->select('po.*, uc.full_name as user_customer_name, wt.name as wrapping_type_name');
        $this->db->join('users_customer uc', 'po.user_customer_id = uc.id');
        $this->db->join('wrapping_type wt', 'po.wrapping_type_id = wt.id');
        $this->db->where('status', 0);
        $this->db->where('payment_image IS NOT null');
        $this->db->from("process_order po");
        $data = $this->db->get()->result();
        return $data;
        
    }

}