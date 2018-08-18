<?php
	session_start();

	$conn = mysqli_connect('localhost', 'root', '', 'premier_league');

	define("BASE_PATH","D:/wamp64/www/players/");
	define("BASE_URL","http://localhost/oopstore/");

	require_once(BASE_PATH.'classes/controller/Controller.php');
	require_once(BASE_PATH.'classes/controller/PlayerController.php');
	require_once(BASE_PATH.'classes/controller/LeagueCategoryController.php');
	


?>