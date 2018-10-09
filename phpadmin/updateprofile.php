<?php


session_start();



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




$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$uname = $_POST['username'];
$password = $_POST['password'];
$level = '0';


$sql = "UPDATE tb_admin SET firstname ='".$fname."',lastname ='".$lname."',email ='".$email."',username ='".$uname."',password ='".$password."',level ='".$level."' WHERE username='".$uname."'";

if (mysqli_query($conn, $sql)) {
    echo "berhasil update data !";
    header('location:../admin/updateadm.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>