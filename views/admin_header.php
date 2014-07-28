<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Magallon's Chocolate</title>
	<link rel="stylesheet" href="assets/css/styles.css">
	<link href='http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica+SC' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
<body>
	
	<header class="clearfix">
		<div class="container">	
			<div class="follow">
				<a href="#"><img src="assets/images/icon_fb3.png" alt=""></a>
				<a href="#"><img src="assets/images/icon_twit3.png" alt=""></a>
				<a href="#"><img src="assets/images/icon_insta3.png" alt=""></a>
			</div>
			
			<a class="logo clearfix" href="#">
				<img id="logo" src="assets/images/logo2.png" alt="">
			</a>

			<div class="login ">
				
				<?php if(Login::is_logged_in()): ?>
		          <a href="logout.php"><i class="fa fa-sign-in fa-lg"></i>Logout</a>
		          <? else: ?>
		          <a href="login.php"><i class="fa fa-sign-in fa-lg"></i>Login</a>
		        <? endif; ?>
				
				
			</div>
		</div>
	</header>
	
	<div class="container clearfix">