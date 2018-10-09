<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db_perpustakaan";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn)
	{
	die("Connection failed: " . mysqli_connect_error());
	}

// Cek username


$flag = '1';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO tb_user VALUES ('','$firstname','$lastname','$email','$username','$password','$flag')";

if (mysqli_query($conn, $sql))
	{
	echo "Selamat Anda Berhasil Membuat Data!!";
	}
  else
	{
	echo "Error: " . $sql . "<br />" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
