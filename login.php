<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
		
		<title>OWO</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="shortcut icon" href="img/owo.png" />
	</head>
	
	<body id="page-login">
		<div class="container">
			<h1 class="title">OWO</h1>
			<div class="formlogin">
				<form method="post" role="form">
					<div class="row">
						<div class="col-xs-2">
							<div style="color:white;padding:5px 5px">
							<i class="fa fa-fw fa-user"></i>
						</div>
						</div>
						<div class="col-xs-10">
							<input class="input-login" name="ponsel" type="tel" placeholder="Nomor Ponsel" maxlength="13" autocomplete="off" autofocus required>
						</div>
					</div>
					<button class="signin" onclick="return location='home'">Sign In</button>
				</form>
				<div class="row line">
					<div class="col-xs-5"><hr></div>
					<div class="col-xs-2" style="padding-top:15px;font-size:10px">Atau</div>
					<div class="col-xs-5"><hr></div>
				</div>
				<button class="signup" style="margin-top:0" onclick="return location='register'">Join Now</button>
			</div>
		</div>
	</body>
</html>