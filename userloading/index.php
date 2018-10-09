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
		<title>Home</title>
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
		<link rel="stylesheet" type="text/css" href="../css/style2.css">
		<!-- alertify css -->
		<!-- include the style -->
		<link rel="stylesheet" href="../alertifyjs/css/themes/alertify.min.css" />
		<!-- include a theme -->
		<link rel="stylesheet" href="../alertifyjs/css/themes/default.min.css" />
	</head>
	<body>
		<header class="">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="../images/banner/banner1.png" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/banner/banner2.png" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../images/banner/banner3.png" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</header>
		<section class="" >
			<div id="navigation-bar">
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Perpustakaan</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active ">
								<a class="nav-link" href="index.php"><img src="../images/icons/home.ico" alt="">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
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
		<section class="jumbotron mainsection" style="text-align: center;">
			<h1 class="h1" style="text-align: center;">Hallo Semua!</h1>
			<br>
			<h3 class="h3" style="text-align: center;">Selamat datang di Web Perpustakaan Bergerak</h3>
			<br>
			<br>
			<div class="container">
				<!-- <h3 class="h3">Form Kritik Dan Saran</h3> -->
				<blockquote class="blockquote text-center">
					<p class="mb-0">Para pengunjung web perpustakaan bergerak,terima kasih atas kunjungan ada di web perpustakaan kami <br> terima kasih juga kepada kalian yang sudah mengsupport start up milik kami dan tentunya kami akan sangat berterima kasih kepada kalian <br> apabila kalian bersedia meluangkan waktu untuk mengisi form kritik dan saran ini <br> Guna  untuk meningkatkan pelayanan kami kedepanya. <br> Terima kasih </p>
				<footer class="blockquote-footer">Developer <cite title="Source Title">Perpustakaan Bergerak</cite></footer>
			</blockquote>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
			Click here!
			</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="../phpuser/kritikdansaran.php" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="name"  placeholder="Please Enter Your Name">
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="phone" placeholder="Enter phone number" required>
									<small  class="form-text text-muted">We'll never share your phone number with anyone else.</small>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Enter email" required>
									<small class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<textarea class="form-control" type="textarea" name="message" placeholder="Message" rows="10" required></textarea>
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1" required>Agree</label>
									<small class="form-text text-muted">Your personal data will be save and we never shared to anyone.</small>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
							<div class="modal-footer">
								<footer class="container-fluid" style="text-align: center;">
									<h6 class="h6">All Reserved &copy By Perpustakaan Bergerak 2018</h6>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</div>
</section>
<section class="container-fluid" >
	<h1 class="h1" style="text-align: center">Apa Pelayanan Dari kami?</h1>
	<div class="container-fluid icon-img">
		<div>
			<img src="../images/ppp/booking.png" alt="">
			<h3 class="h3">Easy Booking</h3>
			<p class="p">Kami menyediakan pelayanan booking service yang sangat simple,dan tentunya memudahkan peminjaman buku anda</p>
		</div>
		<div>
			<img src="../images/ppp/profile.png" alt="">
			<h3 class="h3">Kenyamanan User</h3>
			<p class="p">Tentunya kenyamanan anda adalah prioritas utama dari kami</p>
		</div>
		<div>
			<img src="../images/ppp/service.png" alt="">
			<h3 class="h3">Pelayanan yang cepat</h3>
			<p class="p">tidak perlu lagi meminjam buku dengan proses yang sangat lama</p>
		</div>
		<div>
			<img src="../images/ppp/ui.png" alt="">
			<h3 class="h3">Easy User Interface</h3>
			<p class="p">Dengan fitur web yang sangat responsive dan simple,kami menyediakan fitur fitur ya dapat membantu anda</p>
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