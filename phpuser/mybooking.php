<?php 

session_start();


require 'connectdb.php';

$username = $_SESSION['username'];
$idbook = $_GET['id_buku'];
$tanggal = date('d-m-Y');
$idcart = '';
$quantity = '1';



$sql = "INSERT INTO tb_cart VALUES '$idcart','$username','$tanggal','$idbook','$quantity'";

if (mysqli_query($connection,$sql)) {
	# code...
	echo 'data berhasil masuk';
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}




mysqli_close($connection);
 ?>