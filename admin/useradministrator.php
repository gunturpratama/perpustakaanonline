<!DOCTYPE html>
<html lang="en">
  <head>


      <?php
    
      require '../phpuser/connectdb.php';
      session_start();
      if($_SESSION['username']=='' && $_SESSION['password']==''){
        if ($_SESSION['flag']=='1') {
        header("location:login.php");
        }
        echo $_SESSION['username'];
    
      }
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Perpustakaan Bergerak</title>
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
        <li class="breadcrumb-item active">Users Administrator</li>
      </ol>
      <!-- Area Chart Example-->
      <!-- table user -->
      <!-- untuk melihat daftar user yang terdaftar di table -->
      <section class="jumbotron">
        
        <div class="container">

          <h3 class="h3">Table Data User</h3>


          <?php 

          
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "db_perpustakaan";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT id_user, firstname, lastname, email ,username_user ,password ,flag FROM tb_user";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

              echo '<table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID User</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Flag</th> 
                <th scope="col">Edit/Delete</th>

              </tr>
            </thead>';
                // output data of each row
                while($row = mysqli_fetch_array($result)) {

                    echo' <tbody>
               <tr>
                <th scope="row">'.$row['id_user'].'</th>
                <td>'.$row['firstname'].'</td>
                <td>'.$row['lastname'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['username_user'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['flag'].'</td>
                <td><button type="submit" class="btn btn-warning" ><a href="../phpadmin/formedituseradm.php?id_user='.$row['id_user'].'">Edit</a></button>
                  <button type="submit" class="btn btn-danger"><a href="../phpadmin/deleteuser.php?id_user='.$row['id_user'].'">Delete</button></td>
              </tr>
              
            </tbody>';
                }
                echo '</table>';
            } else {
                echo "0 results";
            }

            mysqli_close($conn);


           ?>



       
          <!-- table user -->
        </div>
      </section>
      <!-- end of section -->



      <!-- Mendaftarkan User Lewat Admin -->



      <!-- section -->
      <section class="jumbotron">

        <div class="container">
          <div class="container-login100">
            <span class="login100-form-title">
              Sign Up User
            </span>
            <div class="wrap-login100">
              <form class="login100-form validate-form p-l-55 p-r-55 p-t-125" action="../phpuser/signupdata.php" method="POST">
                <div class="wrap-input100 validate-input m-b-16" data-validate="Firstname Cant Be Empty">
                  <input class="input100" type="text" name="firstname" placeholder="First Name">
                  <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Lastname Cant Be Empty">
                  <input class="input100" type="text" name="lastname" placeholder="Last Name">
                  <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16 " data-validate="Email is required">
                  <input class="input100" type="text" name="email" placeholder="Email">
                  <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "You Must Fill Username">
                  <input class="input100" type="text" name="username" placeholder="Username">
                  <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="You Must Fill Password">
                  <input class="input100" type="password" name="password" placeholder="Password">
                  <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                  <button class="login100-form-btn">
                  Sign in
                  </button>
                </div>
                
                
              </form>
              
            </div>
          </div>
          
        </div>
        
      </section>


      <!-- end of section -->



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
    </div>
  </body>
</html>