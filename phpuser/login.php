


 <?php 

require 'connectdb.php';

$username = $_POST['username'];
$password = $_POST['password'];


$querry = mysqli_query($connection, "select * from tb_user where username_user='$username' and password='$password'");
$rows = mysqli_num_rows($querry);
$f = mysqli_fetch_assoc($querry);


if ($rows > 0) {

	if ($f['flag']=='1') {
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['id_user'] = $f['id_user'];
		$_SESSION['flag'] = 
		$_SESSION['status'] = "submit";
		
		echo ' <script>
		alert("anda berhasil login");
		</script>';

		header("location:../user/halamanutama.php");
	}else{
		echo 
	' <script> 
	alert("maaf anda tidak bisa masuk");
	window,location = "../userloading/index.php"
	</script>';
	}
	
} else {
	echo 
	' <script> 
	alert("maaf anda tidak bisa masuk silahkan cek username dan password yang anda masukan lagi !");
	window,location = "../userloading/index.php"
	</script>';
}



 ?>