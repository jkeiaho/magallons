<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/product.model.php';

$cart_products = array();
$grand_total = 0;


	foreach($_SESSION['cart'] as $id =>$qty){
		$product = new Model('tb_product');

		$product->load($id);
		$total_price = $qty * $product->price;
		$grand_total += $total_price;

		$cart_products[] = array(
			'image'       => $product->image,
			'description' => $product->description,
			'total_price' => $total_price,
			'price'       => $product->price,
			'quantity'    => $qty,
			'name'    	  => $product->name,
			'id'    	  => $product->id
		);
	}



include '../views/header.php';
include '../views/navigation.php';
include '../views/cart_list.php';
include '../views/footer.php';