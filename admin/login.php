<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Cross Current // Admin</title>

	<!-- Default Styles (DO NOT TOUCH) -->
	<link rel="stylesheet" href="lib/css/font-awesome.min.css">
	<link rel="stylesheet" href="lib/css/bootstrap.min.css">
	<link rel="stylesheet" href="lib/css/fonts.css">
	<link rel="stylesheet" href="lib/css/opacity-admin.css" />

	<!-- Adjustable Styles -->
	<link rel="stylesheet" href="lib/css/icheck.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<script src="lib/js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="contain">

		<!-- BEGIN LOGIN -->
		<div class="login">
			<div class="login-box">

				<!-- LOGIN LOGO -->
				<div class="log-logo">
					<h2 style="color: white">Admin</h2>
					<!-- <img src="lib/img/logo3.png"> -->
				</div>

				<!-- LOGIN FORM -->

				<form action="php/loginscript.php" method="post">
					<div class="log-contain">
						<?php
						if (isset($_GET['msg'])) {
							if ($_GET['msg'] == 2) {
								print "<p style='text-align: center' class='alert alert-danger'>Password or Username is Worng!<br><span style='font-size: 10px'>(Legal Action would be taken for unauthorized login)</span</p>";
							}
							if ($_GET['msg'] == 4) {
								print "<p style='text-align: center' class='alert alert-success'>You are Logout Please Login Again!</p>";
							}
							if ($_GET['msg'] == 5) {
								print "<p style='text-align: center' class='alert alert-danger'>Please Login to Continue!</p>";
							}
						}
						?>

						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control col-sm-12" placeholder="Enter Username" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control col-sm-12" placeholder="Enter Password" required>
						</div>
						<!-- <div class="form-group">
							<input tabindex="13" type="checkbox" class="icheck-blue" id="fc1" checked>
							<label class="checkbox-label" for="fc1">Remember Me</label>
						</div> -->
					</div>

					<!-- LOGIN BUTTONS -->
					<div class="log-footer" align="middle">
						<!-- <div class="forgot"><a href="#">Forgot Password?</a></div> -->
						<!-- <a href="#" class="btn btn-default">Cancel</a>&nbsp;&nbsp; -->
						<div align="middle">
							<!-- <input type="submit" class="btn btn-info" name="submit"> -->
							<button class="btn btn-info" name="submit">Login</button>
						</div>
					</div>
				</form>

			</div>

			<!-- LOGIN SOCIAL BUTTONS -->
			<!-- <a href="#" class="btn btn-primary btn-login"><i class="fa fa-facebook"></i></a>
			<a href="#" class="btn btn-info btn-login"><i class="fa fa-twitter"></i></a>
 -->
		</div>

	</div>

	<!-- Default JS (DO NOT TOUCH) -->
	<script src="lib/js/jquery.min.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>

	<!-- Adjustable JS -->
	<script src="lib/js/icheck.min.js"></script>
	<script>
		$('.icheck-blue').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat-blue'
		});
	</script>

</body>

</html>