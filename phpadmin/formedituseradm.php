<!-- Create by : Moch Guntur Pratama & Ida Bagus Made Yudiarta
Date : 7 june 2018
Project : Tugas Pemrograman Web I
Semester : 2
Developer Email :
- Pengabdixketan@gmail.com
-->
<!DOCTYPE html>
<html>
	<head>
		<title>Edit User</title>
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
		<div class="jumbotron" style="background-color:#2e4052;">
			
			</style>
			
			<h1 class="h1" style="text-align: center; color: white;">Edit User</h1>
		</div>
		<section id="input-form">


			<?php

			require '../phpadmin/admconnectdb.php';


			$id = $_GET['id_user'];


			$sql = "SELECT * FROM tb_user WHERE id_user='$id' " ;
			$query = mysqli_query($connection,$sql);
			$fetch = mysqli_fetch_array($query);



			 ?>
			
			
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100">
						<form class="login100-form validate-form p-l-55 p-r-55 p-t-125" action="edituser.php" method="POST">
							<input type="hidden" name="iduser" value="<?php $_GET['id_user']; ?>">
							<div class="wrap-input100 validate-input m-b-16" data-validate="Firstname Cant Be Empty">
								<input class="input100" type="text" name="firstname" value="<?php echo $fetch['firstname']; ?>" placeholder="First Name">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-16" data-validate = "Lastname Cant Be Empty">
								<input class="input100" type="text" name="lastname" value="<?php echo $fetch['lastname']; ?>" placeholder="Last Name">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-16 " data-validate="Email is required">
								<input class="input100" type="text" name="email" value="<?php echo $fetch['email']; ?>" placeholder="Email">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-16" data-validate = "You Must Fill Username">
								<input class="input100" type="text" name="username" value="<?php echo $fetch['username_user'] ?>" placeholder="Username">
								<span class="focus-input100"></span>
							</div>
							<div class="wrap-input100 validate-input m-b-16" data-validate="You Must Fill Password">
								<input class="input100" type="password" name="password" value="<?php echo $fetch['password']; ?>" placeholder="Password">
								<span class="focus-input100"></span>
							</div>
							<div class="container-login100-form-btn">
								<button class="login100-form-btn">
								Update
								</button>
							</div>
						
							
						</form>
						
					</div>
				</div>
				
			</div>
		</section>
		
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
		<!--===============================================================================================-->
		<script src="../vendor/daterangepicker/moment.min.js"></script>
		<script src="../vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="../vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="../js/main.js"></script>
		<!-- alertify javascript -->
		<!-- include the script -->
		<script src="../alertifyjs/alertify.min.js"></script>
	</body>
</html>