<?php
	session_start();
	
	if(isset($_SESSION['sesi'])) {
		include "home.php";
	
	} else {
		include "login.php";
	}