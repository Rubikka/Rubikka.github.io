<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "qar";
	$connection = mysqli_connect($host, $username, $password , $db);
	if(!$connection){
		die("could not connect to db - " . mysqli_connect_error());
	}
?>