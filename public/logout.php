<?php

require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';

Login::log_out();

//header('location: index.php');
//exit;


# filename: logout.php

// session_start();

// unset($_SESSION['logged_in']);

Cart::clear_cart($product_id, $quantity);

header('location: index.php');
exit;