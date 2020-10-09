<?php
class Cart extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }
    
    public function insert($product_id, $qty, $user_customer_id) {

        $this->db->insert('cart', [
            'product_id' => $product_id,
            'qty' => $qty,
            'user_customer_id' => $user_customer_id,
        ]);
        return $this->db->insert_id();

    }

    public function update($product_id, $qty, $user_customer_id) {
        
        $this->db->where('product_id', $product_id);
        $this->db->where('user_customer_id', $user_customer_id);
        $this->db->update('cart', [
            'qty' => $qty,
        ]);

    }

    public function delete($user_customer_id) {

        $this->db->where('user_customer_id', $user_customer_id);
        $this->db->delete("cart");

    }

    public function get($user_customer_id) {

        $this->db->select('c.*, p.*');
        $this->db->join('product p', 'c.product_id = p.id');
        $this->db->where("user_customer_id", $user_customer_id);
        $this->db->from("cart c");
        $data = $this->db->get()->result();
        return $data;

    }

}