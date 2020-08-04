<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title>Welcome</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="img/owo.png" />
	</head>
	
	<body style="background:#4D2A86">
		<div class="container text-center">
			<div class="welcome">
				<h4>Selamat <?php session_start(); echo $_SESSION['nama']; ?></h4>
				<h4>Anda terdaftar di OWO!</h4>
				<span style="font-size:11px">Anda dapat menggunakan OWO dalam kehidupan sehari-hari, 
				dapatkan penawaran spesial dan mulai kumpulkan OWO Points</span>
				
				<div style="margin-top:50px">
					<img src="img/owo.png" style="width:50%">
				</div>
				
				<button class="signup" onclick="return location='./'">Mulai</button>
			</div>
		</div>
	</body>
</html>

<?php
	
	$_SESSION['sesi'] = $_SESSION['ponsel'];
	
	unset($_SESSION['nama']);
	unset($_SESSION['ponsel']);
	unset($_SESSION['email']);
	unset($_SESSION['promo']);
	unset($_SESSION['security']);
?>