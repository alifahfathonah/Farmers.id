<?php
class Process_order_detail extends CI_Model {

    var $CI;
	public function __construct()
	{
		parent::__construct();
        $this->CI=& get_instance();
    }
    
    public function insert($process_order_id, $product_id, $qty, $subtotal) {

        $this->db->insert('process_order_detail', [
            'process_order_id' => $process_order_id,
            'product_id' => $product_id,
            'qty' => $qty,
            'subtotal' => $subtotal,
        ]);
        return $this->db->insert_id();

    }
    
    public function get($process_order_id) {

        $this->db->select('pod.*, p.name as product_name, p.image');
        $this->db->join('product p', 'pod.product_id = p.id');
        $this->db->where("process_order_id", $process_order_id);
        $this->db->from("process_order_detail pod");
        $data = $this->db->get()->result();
        return $data;
        
    }
    
}