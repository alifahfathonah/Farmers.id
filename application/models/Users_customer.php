<?php
class Users_customer extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }

    public function login($email, $password) {

        $this->db->from("users_customer");
        $this->db->where("email = '" . $email . "'");
        $this->db->where("password = '" . md5($password) . "'");
        $data = $this->db->get()->row();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }

    public function insert($full_name, $phone_number, $full_address, $email, $password) {

        $this->db->insert('users_customer', [
            'full_name' => $full_name,
            'phone_number' => $phone_number,
            'full_address' => $full_address,
            'email' => $email,
            'password' => md5($password),
        ]);
        return $this->db->insert_id();

    }

    public function update($id, $full_name, $phone_number, $full_address, $email, $password) {
        
        $this->db->where("id",$id);
        $this->db->update('users_customer', [
            'full_name' => $full_name,
            'phone_number' => $phone_number,
            'full_address' => $full_address,
            'email' => $email,
            'password' => $password,
        ]);

    }

    public function delete($id) {

        $this->db->where("id",$id);
        $this->db->delete("users_customer");

    }

    public function get($id) {

        $this->db->where("id",$id);
        $this->db->from("users_customer");
        $data = $this->db->get()->row();
        return $data;

    }
    
    public function get_admin() {

        $this->db->from("users_customer");
        $data = $this->db->get()->row();
        return $data;

    }

}