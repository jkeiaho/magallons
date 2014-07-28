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

Cart::clear_cart();



}else{

	URL::save();
	
	header('location: login.php');
	exit;

}


include '../views/header.php';
include '../views/checkout_main.php';
include '../views/footer.php';