<?php
class Category extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }

    public function get_admin() {

        $this->db->from("category");
        $this->db->order_by("id");
        $data = $this->db->get()->result();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }

    public function insert($image, $name) {

        $this->db->insert('category', [
            'image' => $image,
            'name' => $name,
        ]);
        return $this->db->insert_id();

    }

    public function update($id, $image, $name) {
        
        $this->db->where("id",$id);
        $this->db->update('category', [
            'image' => $image,
            'name' => $name,
        ]);

    }

    public function delete($id) {

        $this->db->where("id",$id);
        $this->db->delete("category");

    }

    public function get($id) {
        
        $this->db->where("id",$id);
        $this->db->from("category");
        $data = $this->db->get()->row();
        return $data;
        
    }

}