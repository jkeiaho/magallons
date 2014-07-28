<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/hash.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/users.model.php';


if($_POST){

 	if($_POST['password'] == $_POST['confirm_password']){
		$user = new User();

		$user->first_name = $_POST['first_name'];
		$user->last_name  = $_POST['last_name'];
		$user->email 	  = $_POST['email'];
		$user->password   = $_POST['password'];

		if($user->save()){
			header('location: login.php');
			exit;
		}
	}else{
		$error = 'Passwords do not match';
	}

}

include '../views/header.php';
include '../views/navigation.php';
include '../views/signup_form.php';
include '../views/footer.php';