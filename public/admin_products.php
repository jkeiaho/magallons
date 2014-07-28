<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.lib.php';

//      expression           ? true thing    : false thing
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$products = new Product_Collection($_GET['id'], $page);




include '../views/admin_header.php';
include '../views/admin_navigation.php';
include '../views/admin_list.php';
include '../views/footer.php';