<!DOCTYPE html>
<html>
<head>



    <?php
    
      require '../phpuser/connectdb.php';
      session_start();
      if($_SESSION['username']=='' && $_SESSION['password']==''){
        if ($_SESSION['level']=='0') {
        header("location:login.php");
        }
        echo $_SESSION['username'];
    
      }
    ?>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buku Administrator</title>
	<link rel="stylesheet" href="">

	<!-- Css -->


	<!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->

</head>
<body>


 <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="index.php">Admin Perpustakaan Bergerak</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="halamanutama.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="useradministrator.php">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">User Admin</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="bukuadm.php">
              <i class="fa fa-fw fa fa-wrench"></i>
              <span class="nav-link-text">Book Admin</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="tables.php">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Booking & History Admin</span>
            </a>
          </li>
        </li>



        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Welcome</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">

            <li>
              <a href="register.php">Registration Page</a>
            </li>
            <li>
              <a href="updateadm.php">Update Profile Page</a>
            </li>
          </ul>
        </li>





        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw  fa fa-user-secret"></i>
            <span class="nav-link-text">Hello Admin</span>
          </a>
        </li>
      </ul>



      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>



      <ul class="navbar-nav ml-auto">
        
        </li>



        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="../phpadmin/admlogout.php">
          <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">



        <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Book Administrator</li>
      </ol>



<!-- buku administrator -->
<div class="container">


<h1 class="h1 text-center">Daftar Buku</h1>

<?php 


require '../phpadmin/admconnectdb.php';





$sql = "SELECT id_buku,judul_buku,isbn,id_penulis,id_penerbit,id_kategori,jumlah_halaman,tahun_terbit,deskripsi,jumlah_buku,gambar_buku FROM tb_buku";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {


    echo '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Buku</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">ISBN</th>
      <th scope="col">ID Penulis</th>
      <th scope="col">ID Penerbit</th>
      <th scope="col">ID Kategori</th>>
      <th scope="col">Jml Halaman </th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Jumlah Buku</th>
      <th scope="col">Gambar</th>
      <th scope="col"></th>
    </tr>
  </thead>
';
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

      echo '<tbody>
    <tr>
      <td>'.$row['id_buku'].'</td>
      <td>'.$row['judul_buku'].'</td>
      <td>'.$row['isbn'].'</td>
      <td>'.$row['id_penulis'].'</td>
      <td>'.$row['id_penerbit'].'</td>
      <td>'.$row['id_kategori'].'</td>
      <td>'.$row['jumlah_halaman'].'</td>
      <td>'.$row['tahun_terbit'].'</td>
      <td>'.$row['deskripsi'].'</td>
      <td>'.$row['jumlah_buku'].'</td>
      <td><img style="width:50px;" src="../images/upload/'.$row['gambar_buku'].'"/></td>
      <td><button type="submit" class="btn btn-warning"><a href="../phpadmin/formeditbuku.php?id_buku='.$row['id_buku'].'">Edit</a></button>
          <button type="submit" class="btn btn-danger"> <a href="../phpadmin/deletebuku.php?id_buku='.$row['id_buku'].'">Delete</button></td>
    </tr>
  </tbody>
';
        
    }
    echo '</table>';
} else {
    echo "0 results";
}

mysqli_close($connection);
?>



    <!-- /.content-wrapper-->
   <!--    <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Your Website 2018</small>
          </div>
        </div>
      </footer> -->


      </div>


            <div class="container-fluid">
              <div class="container">
                
                
                <h3 class="h3 text-center">Tambah Buku</h3>
                <form action="../phpadmin/tambahbuku.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judulbuku"  placeholder="Masukan judul buku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISBN</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="isbn"  placeholder="Masukan ISBN">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Penulis</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="penulis">
                      <option value="7001">JK Rowling</option>
                      <option value="7002">Wahyu Baskara</option>
                      <option value="7003">Panji Diva</option>
                      <option value="7004">Eichiro Oda</option>
                      <option value="7005">Masako</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Penerbit</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="penerbit">
                      <option value="5001">Gramedia</option>
                      <option value="5002">Gubuk Media</option>
                      <option value="5003">Waluyo</option>
                      <option value="5004">Stiki Indonesia</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                      <option value="1">Education</option>
                      <option value="2">Fiction</option>
                      <option value="3">Technology</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="halamanbuku" placeholder="Jumlah halaman Buku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Tahun Terbit</label>
                    <div class="col-10">
                      <input class="form-control" type="date" name="tahunterbit"  id="example-date-input">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="10" placeholder="Masukan Deskripsi Buku"></textarea>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Buku</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jumlahbuku" placeholder="Jumlah Buku">
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="exampleFormControlFile1">Gambar Buku</label>
                    <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                  </div>




                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>











     
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="../phpadmin/admlogout.php">Logout</a>
            </div>
          </div>
        </div>
      </div>


   

      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
	
</body>
</html>