<?php

require_once '../libraries/config.lib.php';
require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/product.collection.php';
require_once '../models/orderline.collection.php';

$orders = new Orderline_Collection();


//	foreach(/*$_SESSION['cart'] as $id =>$qty*/){
//		$order = new Model('tb_order');
//
//		$order->load($id);
//
//		$orders[] = array(
//			'id'       	  => $order->id,
//			
//		);
//	}


include '../views/admin_header.php';
include '../views/admin_navigation.php';
include '../views/admin_orders_table.php';
include '../views/footer.php';