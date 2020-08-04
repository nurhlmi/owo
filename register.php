<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title>Register</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="img/owo.png" />
	</head>
	
	<body>
		<header>
			<div class="row">
				<div class="col-xs-2">
					<i class="fa fa-fw fa-arrow-left" onclick="history.back()"></i>
				</div>
				<div class="col-xs-10">
					<span>JOIN OWO</span>
				</div>
		</header>
		<div class="container">
			<div class="formregister">
				<span>Terima kasih telah bergabung! Kami akan mengirimkan <b>kode</b> melalui
				<b>Email</b> untuk verifikasi proses registrasi</span>
				
				<form method="post" role="form">
					<input class="input-regis" name="nama" type="text" placeholder="Nama Lengkap" autocomplete="off" autofocus required>
					<input class="input-regis" name="ponsel" type="tel" placeholder="Nomor Ponsel" autocomplete="off" maxlength="13" required>
					<input class="input-regis" name="email" type="email" placeholder="Email" autocomplete="off" required>
					<input class="input-regis" name="promo" type="text" placeholder="Kode Promo/Referensi: (Opsional)" autocomplete="off">
					<input type="checkbox" required><span class="agree">Saya setuju dengan <a href="#">Syarat & Ketentuan</a></span>
					<button name="signup" class="signup">Berikutnya</button>
				</form>
			</div>
			</div>
		</div>
	</body>
</html>

<?php
	if(isset($_POST['signup'])) {
		
		include "connect.php";
		include "random.php";
		
		$sql = "SELECT email,ponsel FROM user";
		$query = mysqli_query($con,$sql);
		$data = mysqli_fetch_array($query);
		
		if($_POST["email"] == $data["email"]) {
			echo "<script>alert('Email telah digunakan!');location=history.back()</script>";
		}
		
		else if($_POST["ponsel"] == $data["ponsel"]) {
			echo "<script>alert('Nomor ponsel telah digunakan!');location=history.back()</script>";
		}
		
		else {
			session_start();
			$_SESSION['nama'] = $_POST['nama'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['ponsel'] = $_POST['ponsel'];
			$_SESSION['promo'] = $_POST['promo'];
			
			$insert = "INSERT INTO verify (email,code) VALUES ('$_POST[email]','$acak')";
			$process = mysqli_query($con,$insert);
			
			echo "<script>location='verify'</script>";
		}
	}
?>