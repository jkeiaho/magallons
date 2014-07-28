<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/config.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../models/product.collection.php';
require_once '../libraries/login.lib.php';


$product = new Model('tb_product');

$product->load($_GET['id']);

include '../views/header.php';
include '../views/navigation.php';
include '../views/product_detail.php';
include '../views/footer.php';