<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "db_perpustakaan";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

?>