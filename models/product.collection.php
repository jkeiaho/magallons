<?php 
/*

require_once '../libraries/config.lib.php';

class Product_Collection{

	public $items = array();
	private $db;

	public function __construct($id = false){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		$this->db->select('*')->from('tb_product')->where('deleted', '0');

		if($id){
			$this->db->where_and('category_id', $id);
		}
			
		$this->items = $this->db->get();
	}
} 

*/



require_once '../libraries/config.lib.php';

class Product_Collection{

	public $items = array();
	private $db;
	private $per_page = 6;
	private $cat = 0;

	public function __construct($id = false, $page = 1){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		$this->cat = $id;

		$this->db->select('*')->from('tb_product')->where('deleted', '0');

		if($id){
			$this->db->where_and('category_id', $id);
		}


//this is for the pagination
		$this->db->limit(($page-1)*$this->per_page, $this->per_page);
			
		$this->items = $this->db->get();
	}

	public function count(){
		$this->db
			->select('id')
			->from('tb_product')
			->where('deleted', '0');

		if($this->cat){
			$this->db->where_and('category_id', $this->cat);
		}

		$items = $this->db->get();

		return count($items);
	}
}