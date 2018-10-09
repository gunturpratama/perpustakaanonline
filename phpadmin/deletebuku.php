<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_perpustakaan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$id = $_GET['id_buku'];

// sql to delete a record
$sql = "DELETE FROM tb_buku WHERE id_buku='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>