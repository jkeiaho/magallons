<?php

session_start();

require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/users.model.php';
require_once '../models/admin.model.php';
require_once '../libraries/hash.lib.php';
require_once '../libraries/cart.lib.php';
require_once '../libraries/url.lib.php';

$form = new Form();

if($_POST){
	$user = new User();

	$user->email = $_POST['email'];
	$user->password = $_POST['password'];

	if($user->authenticate()){
		Login::log_in();
		URL::restore();
		header('location: index.php');
	}else{
		$user = new Admin();

		$user->email = $_POST['email'];
		$user->password = $_POST['password'];

		if($user->authenticate()){
			Login::log_in($user->id, true);
			header('location: admin.php');
			exit;
		}else
		$error = 'Incorrect email or password';
	}
}

include '../views/header.php';
include '../views/navigation.php';

if(Login::is_logged_in()){
	include '../views/home.php';
}else{
	include '../views/login_form.php';
}

include '../views/footer.php';