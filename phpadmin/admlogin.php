<?php 


// connection database
require 'admconnectdb.php';


$admin = $_POST['username'];
$password = $_POST['password'];


$querry = mysqli_query($connection, "select * from tb_admin where username='$admin' and password='$password'");
$rows = mysqli_num_rows($querry);
$level = mysqli_fetch_assoc($querry);
$fetch = mysqli_fetch_assoc($querry);


if ($rows > 0) {

	if ($level['level']=='0') {
		echo ' <script>
		alert("anda berhasil login");
		window.location = "../admin/index.php";
		</script>';
		session_start();
		$_SESSION['username'] = $admin;
		$_SESSION['password']= $password;
		$_SESSION['level'] = $level; 
		$_SESSION['id_admin'] = $fetch['id_admin'];
		$_SESSION['status'] = "submit";
		header("location:../admin/halamanutama.php");
	}else{
		echo 
	' <script> 
	alert("maaf anda tidak bisa masuk");
	window,location = "../admin/index.php"
	</script>';
	}
	
} else {
	echo 
	' <script> 
	alert("maaf anda tidak bisa masuk");
	window,location = "../admin/index.php"
	</script>';
}





 ?>
