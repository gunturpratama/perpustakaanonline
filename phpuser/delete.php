	

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

$iduser = $_SESSION['id_user'];

// sql to delete a record

$sql = "DELETE FROM tb_user WHERE id_user = $iduser";

if (mysqli_query($conn, $sql))
	{
	echo "Record deleted successfully";
	header('../userloading/signin.php');
	}
  else
	{
	echo "Error deleting record: " . mysqli_error($conn);
	}

mysqli_close($conn);
?>
