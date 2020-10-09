<?php
class Content_management extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }

    public function get_public() {

        $this->db->from("banner");
        $this->db->order_by("id");
        $data = $this->db->get()->result();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }

    public function get_admin() {

        $this->db->from("banner");
        $this->db->order_by("id");
        $data = $this->db->get()->result();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }

    public function insert($image, $url) {

        $this->db->insert('banner', [
            'image' => $image,
            'url' => $url,
        ]);
        return $this->db->insert_id();

    }

    public function update($id, $image, $url) {
        
        $this->db->where("id",$id);
        $this->db->update("banner",[
            'image' => $image,
            'url' => $url,
        ]);

    }

    public function delete($id) {

        $this->db->where("id",$id);
        $this->db->delete("banner");

    }

    public function get($id) {

        $this->db->where("id",$id);
        $this->db->from("banner");
        $data = $this->db->get()->row();
        return $data;

    }

}