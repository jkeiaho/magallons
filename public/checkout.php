<?php

session_start();

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/url.lib.php';

if(Login::is_logged_in()){

	// add a new order to the db
	$order = new Model('tb_order');

	$order->order_date = date('Y-m-d');
	$order->customer_id = $_SESSION['email']['id'];
	// $order->order_status = 'Pending';

	// save it so that we know the id of this order
	$order->save();

	// For every product in our cart
	foreach($_SESSION['cart'] as $product_id => $quantity){
		// set up a new orderline, linking this product to the order we made above.

		$orderline = new Model('tb_orderline');

		$orderline->quantity   = $quantity;
		$orderline->product_id = $product_id;
		$orderline->order_id   = $order->id;

		$orderline->save();
	}


Cart::clear_cart();



}else{

	URL::save();
	
	header('location: login.php');
	exit;

}


include '../views/header.php';
include '../views/checkout_main.php';
include '../views/footer.php';