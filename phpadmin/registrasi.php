<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db_perpustakaan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$id = '';
$level = '0';
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$uname = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO tb_admin VALUES ('$id','$fname', '$lname', '$email', '$uname', '$password', '$level')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>