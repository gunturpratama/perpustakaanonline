<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../css/util.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
		<!--===============================================================================================-->
		<!-- alertify css -->
		<!-- include the style -->
		<link rel="stylesheet" href="../alertifyjs/css/themes/alertify.min.css" />
		<!-- include a theme -->
		<link rel="stylesheet" href="../alertifyjs/css/themes/default.min.css" />
	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="../phpuser/login.php">
						<span class="login100-form-title">
							Sign In
						</span>
						<div class="wrap-input100 validate-input m-b-16" data-validate="Username must be filled">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "You must fill password">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
						</div>
						<div class="text-right p-t-13 p-b-23">
							<span class="txt1">
								Forgot
							</span>
							<a href="#" class="txt2 " onclick="myfunction()">
								Username / Password?
							</a>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" name="signin" type="submit" value="sign in" onclick="myfunction()">
							Sign in
							</button>
						</div>
						<div class="flex-col-c p-t-170 p-b-40">
							<span class="txt1 p-b-9">
								Don’t have an account?
							</span>
							<a href="signup.php" class="txt3" onclick="myfunction()">
								Sign up now
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		
		<section>
			<div>
				<footer class="container-fluid" style="text-align: center;">
					<h6 class="h6">All Reserved &copy By Perpustakaan Bergerak 2018</h6>
				</footer>
			</div>
			
		</section>
		
		
		<!--===============================================================================================-->
		<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="../vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="../vendor/bootstrap/js/popper.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="../vendor/select2/select2.min.js"></script>
		<!--==============================================================================================-->
		<script src="../vendor/daterangepicker/moment.min.js"></script>
		<script src="../vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="../vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="../js/main.js"></script>
		<script src="../js/alert.js"></script>
		<!-- alertify javascript -->
		<!-- include the script -->
		<script src="../alertifyjs/alertify.min.js"></script>
	</body>
</html>