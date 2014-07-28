<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/collection.lib.php';
require_once '../libraries/model.lib.php';
require_once '../models/product.collection.php';
require_once '../models/product.model.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/upload.lib.php';

Login::kickout();

$form = new Form();
$title = 'Add Product';

$cat_col = new Collection('tb_category');

$categories = array();

foreach($cat_col->items as $cat){
	$categories[$cat['id']] = $cat['name'];
}

#If the form was just posted
if($_POST){
	$product = new Model('tb_product');

	$product->name 			= $_POST['name'];
	$product->description 	= $_POST['description'];
	$product->price 		= $_POST['price'];
	$product->category_id 	= $_POST['category_id'];

	$images = '';

	#( $_FILES );  #Super Global

	# If any files were uploaded
	if($_FILES){

		$uploaded_files = Upload::to_folder('assets/images/products/');

		foreach($uploaded_files as $file){

			if($file['error_message']){
				echo $file['error_message'];
			}else{
				$product->image = $file['filepath'];
			}
		}
			
	}

	$success = $product->save();
	

	if($success){
		header('location: admin_products.php?id='.$_POST['category_id']);
		exit;
	}
}





include '../views/admin_header.php';
include '../views/admin_navigation.php';
include '../views/add_product.php';
include '../views/footer.php';