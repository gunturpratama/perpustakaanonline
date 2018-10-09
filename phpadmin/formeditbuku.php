<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Buku</title>



	<!-- Bootstrap core CSS-->
    <link href="../admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!--===============================================================================================-->
</head>
<body>

	<?php 


	require '../phpadmin/admconnectdb.php';


$id = $_GET['id_buku'];


  $sql = "SELECT * FROM tb_buku WHERE id_buku='$id' ";
  $koneksi = mysqli_query($connection,$sql);
  $fetch = mysqli_fetch_assoc($koneksi);
	


	 ?>




      </div>


            <div class="jumbotron container">
              <div class="container">
                
                
                <h3 class="h3 text-center">Edit buku</h3>
                <br><br><br>
                <form action="../phpadmin/editbuku.php" method="POST" enctype="multipart/form-data" class="container">
                	<input type="hidden" value="<?php echo $_GET['id_buku'];?>">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="judulbuku"  placeholder="Masukan judul buku" value="<?php echo $fetch['judul_buku']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">ISBN</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="isbn" value="<?php echo $fetch['isbn'];  ?>"  placeholder="Masukan ISBN">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Penulis</label>
                    <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $fetch['id_penulis'] ?>" name="penulis">
                      <option value="7001">JK Rowling</option>
                      <option value="7002">Wahyu Baskara</option>
                      <option value="7003">Panji Diva</option>
                      <option value="7004">Eichiro Oda</option>
                      <option value="7005">Masako</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Penerbit</label>
                    <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $fetch['id_penerbit']; ?>" name="penerbit">
                      <option value="5001">Gramedia</option>
                      <option value="5002">Gubuk Media</option>
                      <option value="5003">Waluyo</option>
                      <option value="5004">Stiki Indonesia</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $fetch['id_kategori']; ?>" name="kategori">
                      <option value="1">Education</option>
                      <option value="2">Fiction</option>
                      <option value="3">Technology</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Halaman</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="halamanbuku" value="<?php echo $fetch['jumlah_buku']; ?>" placeholder="Jumlah halaman Buku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">Tahun Terbit</label>
                    <div class="col-10">
                      <input class="form-control" type="date" name="tahunterbit" value="<?php echo $fetch['tahun_terbit']; ?>"  id="example-date-input">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" value="<?php echo $fetch['deskripsi'];?>" rows="10" placeholder="Masukan Deskripsi Buku"></textarea>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Buku</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jumlahbuku" value="<?php echo $fetch['jumlah_buku']; ?>" placeholder="Jumlah Buku">
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