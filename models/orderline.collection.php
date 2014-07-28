<?php

require_once '../libraries/config.lib.php';

class Orderline_Collection{

	public $items = array();
	private $db;

	public function __construct($id = false){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		$this->db
			->select('tb_product.id, tb_product.name, tb_customer.name, tb_customer.email, tb_orderline.quantity')
			->from('tb_product, tb_customer, tb_orderline')
			->where('tb_product.id = tb_orderline.product_id')
			// ->where_and('tb_orderline.order_id = 2')



		/* if($id){
			$this->db->where('customer_id', $id);
		} */
			
		$this->items = $this->db->get();

	}
} 
