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
		<title>Profile</title>
		<?php
		require '../phpuser/connectdb.php';
		session_start();
		if($_SESSION['username']=='' && $_SESSION['password']==''){
			if ($_SESSION['flag']=='1') {
			header("location:../user/signin.php");
			}
			echo $_SESSION['username'];
		
		}
		?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS BOOTSTRAP -->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css.map">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css.map">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css.map">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.min.css.map">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.css.map">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-reboot.min.css.map">
		<!--===============================================================================================-->
		<!-- CSS STYLE -->
		<!-- alertify css -->
		<!-- include the style -->
		<link rel="stylesheet" href="../alertifyjs/css/themes/alertify.min.css" />
		<!-- include a theme -->
		<link rel="stylesheet" href="../alertifyjs/css/themes/default.min.css" />
	</head>
	<body>
		<section class="" >
			<div id="navigation-bar">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Perpustakaan</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item ">
								<a class="nav-link" href="halamanutama.php"><img src="../images/icons/home.ico" alt="">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="halamanbuku.php"><img src="../images/icons/buku.ico" alt="">Book <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="historyandpenalty.php"><img src="../images/icons/history.ico" alt="">History And Penalty <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="about.php"><img src="../images/icons/bisnis.ico" alt="">About <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="profile.php"><img src="../images/icons/user.ico" alt=""><?php echo $_SESSION['username']; ?> <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../phpuser/logout.php"><img src="../images/icons/signout.ico" alt="">Logout <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="cart.php"><img src="../images/icons/cart.ico" width="30px" alt="">Cart <span class="sr-only">(current)</span></a>
							</li>
							
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>
			</div>
		</section>
		<div class="jumbotron" style="background-color:#2e4052;">
			
			</style>
			
			<h1 class="h1" style="text-align: center; color: white;"> Profile</h1>
		</div>
		
		
		<?php
		$servername = "127.0.0.11";
		$username = "root";
		$password = "";
		$dbname = "db_perpustakaan";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		$username = $_SESSION['username'];
		$sql = "SELECT firstname, lastname, email,username_user,password FROM tb_user WHERE username_user='$username' ";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
		//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		echo '
		<div class="jumbotron">
			<div class="container">
				<h3 class="h3" style="text-align: center;">Merubah Profil</h3>
			</div>
			<div class="container-fluid" style="text-align: center;">
				<form action="../phpuser/update.php" method="POST" accept-charset="utf-8">
						<div class="form-group form-control-lg">
								<input type="Text" name="firstname" value='.$row['firstname'].' placeholder="Please Input Your lastname">
						</div>
						<div class="form-group form-control-lg">
								<input type="Text" name="lastname" value='.$row['lastname'].' placeholder="Please Input Your lastname">
						</div>
						<div class="form-group form-control-lg">
								<input type="Text" name="email" value='.$row['email'].' placeholder="Please Input Your email">
						</div>
						<div class="form-group form-control-lg">
								<input type="Text" name="username" value='.$row['username_user'].' placeholder="Please Input Your username">
						</div>
						<div class="form-group form-control-lg">
								<input type="password" name="password" value='.$row['password'].' placeholder="Please Input Your password">
						</div class="form-group">
						<div>
								<button type="btn btn-primary" onclick="alertfunction()">Submit
								</button>
						</div>
				</form>
			</div>
		</div>';
		}
		} else {
		echo "0 results";
		}
		mysqli_close($conn);
		?>
		<section class="jumbotron">
			<div class="container" style="text-align: center;">
				<h3 class="h3">Menghapus Akun</h3>
				<br>
				<br>
				<div class="container-fluid">
					<a href="../phpuser/delete.php" title="" type="submit" class="btn btn-outline-warning" style="text-align: center;"  onclick="alertfunction()"> Hapus Akun</a>
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
		<script src="../js/alert.js"></script>
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
		<!--===============================================================================================-->
		<!-- Bootstrap JavaScript -->
		<script src="../bootstrap/js/bootstrap.bundle.js"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.bundle.js.map"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.bundle.min.js.map"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.js"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.js.map"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="../bootstrap/js/bootstrap.min.js.map"></script>
		<!--===============================================================================================-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!--===============================================================================================-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<!--===============================================================================================-->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<!-- alertify javascript -->
		<!-- include the script -->
		<script src="../alertifyjs/alertify.min.js"></script>
	</body>
</html>