<!DOCTYPE html>
<html>
<head>



	<?php 

 	require '../phpuser/connectdb.php';
      session_start();
      if($_SESSION['username']=='' && $_SESSION['password']==''){
        if ($_SESSION['flag']=='1') {
        header("location:login.php");
        }
        //echo $_SESSION['username'];
    
      }


	 ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update Profile Admin</title>
	   <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Update Profile</div>
        <div class="card-body">




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

        $id = $_SESSION['username'];

        $sql = "SELECT id_admin, firstname, lastname, username, email,password FROM tb_admin WHERE username='$id'";
        $result = mysqli_query($conn, $sql);




        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        echo ' <form action="../phpadmin/updateprofile.php" method="POST">
      <div class="form-group">
             <div class="form-row">
          <input type="hidden" name="iduser" value='.$row['id_admin'].'">
               <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                  <input class="form-control"  name="firstname" value='.$row['firstname'].' type="text"  placeholder="Enter first name">
             </div>
                  <div class="col-md-6">
                    <label for="exampleInputLastName">Last name</label>
                    <input class="form-control"  name="lastname" value='.$row['lastname'].' type="text"  placeholder="Enter last name">
                   </div>
                 </div>
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                 <input class="form-control"  name="email" type="email" value='.$row['email'].' aria-describedby="emailHelp" placeholder="Enter email">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Username</label>
               <input class="form-control"  name="username" type="text" value='.$row['username'].'  placeholder="Enter Username">
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control"  name="password" type="password" value='.$row['password'].' placeholder="Password">
                   </div>
                </div>
               </div>
               <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>';
        }
        } else {
        echo "0 results";
        }
        mysqli_close($conn);



        	 ?>
         
        </div>
      </div>
    </div>


	<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>