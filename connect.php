<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "owo";
	
	$con = mysqli_connect($host,$user,$pass);
	mysqli_select_db($con,$db);
?>