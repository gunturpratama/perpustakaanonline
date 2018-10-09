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
		<title>About</title>
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
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/style3.css">
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
								<a class="nav-link" href="index.php"><img src="../images/icons/home.ico" alt="">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="halamanbukuloading.php"><img src="../images/icons/buku.ico" alt="">Book <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="aboutloading.php"><img src="../images/icons/bisnis.ico" alt="">About <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="cartloading.php"><img src="../images/icons/cart.ico" width="30px" alt="">Cart <span class="sr-only">(current)</span></a>
							</li>
							<li><button type="button" class="btn btn-outline-light" ><a href="signin.php" title="">Sign In</a></button></li>
							<li><button type="button" class="btn btn-outline-light" ><a href="signup.php" title="">Sign Up</a></button></li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>
					</div>
				</nav>
			</div>
		</section>
		<div>
			<div class="jumbotron">
				<h1 class="h1" style="text-align: center;">Profil Perusahaan</h1>
			</div>
			<div class="container text_center">
				<img src="../images/svg/background.png" alt="" class="img-fluid">
			</div>
			<div class="container text-center">
				<h3 class="h3">Perpustakaan Bergerak</h3>
				<div>
					<p class="lead">Perpustakaan Bergerak adalah sebuah start-up non profit yang bertujuan untuk meningkatkan minat baca anak muda serta orang tua di indoneisa
						<br>
						<br>
						Selain juga meningkatkan minat baca anak indonesia kami juga menyediakan berbagai macam pelatihan yang diajar langsung oleh para volunteer kami yang datang dari seluruh indonesia
						<br>
						<br>
						Dan kami juga berkontribusi dalam berbagai event yang diadakan oleh pemerintah dan maupun swasta
					</p>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<section>
			
			
			<div class="container">
				<div class="from-group col">
					<div class="form-group">
						<form  action="../phpuser/connectmailer2.php" method="POST">
							<br style="clear:both">
							<h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" rows="10"></textarea>
							</div>
							
							<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
						</form>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
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