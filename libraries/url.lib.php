<?php

session_start();

class URL{

	# Save the current url
	public static function save(){
		$_SESSION['saved_url'] = $_SERVER['REQUEST_URI'];
	}

	# Redirect to the last url that was saved.
	# This is one time use, once we use restore, the saved url is deleted
	public static function restore(){
		if($_SESSION['saved_url']){

			$url = $_SESSION['saved_url'];

			unset($_SESSION['saved_url']);

			header('location: '.$url);
			exit;
		}
		
	}
}