<?php
class Users_admin extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }

    public function login($username, $password) {

        $this->db->from("users_admin");
        $this->db->where("username = '" . $username . "'");
        $this->db->where("password = '" . md5($password) . "'");
        $data = $this->db->get()->row();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }

}
