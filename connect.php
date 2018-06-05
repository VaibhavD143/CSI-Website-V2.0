<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'csiwebsite';

	$database_handler = new mysqli($host,$username,$password,$database);

	if($database_handler->connect_error) {
	  die("Connection Error");
	}
   
?>
