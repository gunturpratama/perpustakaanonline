<?php


// make connection of database 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "db_perpustakaan";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>