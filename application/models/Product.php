<?php
class Product extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }

    public function get_admin() {

        $this->db->select('p.*, c.name as category_name');
        $this->db->from("product p");
        $this->db->join('category c', 'p.category_id = c.id', 'left');
        $this->db->order_by("id");
        $data = $this->db->get()->result();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }
    
    public function get_by_category($category_id) {

        $this->db->from("product");
        $this->db->where("category_id", $category_id);
        $this->db->order_by("id");
        $data = $this->db->get()->result();
        if(!empty($data)) 
            return $data;
        else 
            return false;

    }

    public function insert($image, $name, $category_id, $description, $price) {

        $this->db->insert('product', [
            'image' => $image,
            'name' => $name,
            'category_id' => $category_id,
            'description' => $description,
            'price' => $price,
        ]);
        return $this->db->insert_id();

    }

    public function update($id, $image, $name, $category_id, $description, $price) {
        
        $this->db->where("id",$id);
        $this->db->update('product', [
            'image' => $image,
            'name' => $name,
            'category_id' => $category_id,
            'description' => $description,
            'price' => $price,
        ]);

    }

    public function delete($id) {

        $this->db->where("id",$id);
        $this->db->delete("product");

    }

    public function get($id) {

        $this->db->where("id",$id);
        $this->db->from("product");
        $data = $this->db->get()->row();
        return $data;

    }

}