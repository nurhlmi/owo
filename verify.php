<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title>Verify</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="img/owo.png" />
		
		<script type="text/javascript" src="http://localhost/desainerweb.id/app/owo/jquery-1.7.2.min.js"></script>
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
			<div class="formregister text-center">
				<h5 style="color:#4D2A86;font-weight:bold">Masukkan Kode</h5>
				<span>Kami telah mengirimkan kode ke </b><?php session_start(); echo $_SESSION["email"]; ?><b></span><br><br>
				<form method="post" role="form">
					<div class="row">
						<div class="col-xs-2 col-xs-offset-2">
							<input class="input-verify" name="v1" type="tel" maxLength="1" autocomplete="off" autofocus required>
						</div>
						<div class="col-xs-2">
							<input class="input-verify" name="v2" type="tel" maxLength="1" autocomplete="off" autofocus required>
						</div>
						<div class="col-xs-2">
							<input class="input-verify" name="v3" type="tel" maxLength="1" autocomplete="off" autofocus required>
						</div>
						<div class="col-xs-2">
							<input class="input-verify" name="v4" type="tel" maxLength="1" autocomplete="off" autofocus required>
						</div>
					</div>
					
					<button name="verify" class="signup">Berikutnya</button>
				</form>
			</div>
			</div>
		</div>
	</body>
</html>

<script lang="javascript">
$(".input-verify").keyup(function () {
    if (this.value.length == this.maxLength) {
      $(this).next('.input-verify').focus();
    }
});
</script>

<?php
	if(isset($_POST['verify'])) {
		
		include "connect.php";
		
		$code = $_POST['v1'].$_POST['v2'].$_POST['v3'].$_POST['v4'];
		
		$sql = "SELECT code FROM verify WHERE email='$_SESSION[email]' ";
		$query = mysqli_query($con,$sql);
		$data = mysqli_fetch_array($query);
		
		if($code == $data['code']) {
			echo "<script>location='security'</script>";
		
		} else {
			echo "<script>alert('Kode yang Anda masukkan salah!');location='verify'</script>";
		}
	}
?>