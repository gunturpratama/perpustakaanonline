<?php

session_start();

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




$id_user = $_SESSION['id_user'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$flag = '1';
$level = '1';
$sql = "UPDATE tb_user  SET firstname='" . $firstname . "',lastname='" . $lastname . "',email='" . $email . "',username_user='" . $username . "',password='" . $password . "',flag='" . $flag . "',level='" . $level . "' WHERE id_user='" . $id_user . "'";

if (mysqli_query($conn, $sql))
	{
	echo "Record updated successfully";
	header('location:../user/profile.php');
	}
  else
	{
	echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);
?>

