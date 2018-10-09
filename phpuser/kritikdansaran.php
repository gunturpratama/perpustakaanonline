<?php 


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "db_perpustakaan";




$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];



try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);



    // set the PDO error mode to exception


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO tb_kritiksaran (id_saran,nama_pengunjung,no_telp,email,kritikdansaran) VALUES ('','.$name.', '.$phone.', '.$email.' , '.$message.')";


    // use exec() because no results are returned


    $conn->exec($sql);

    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


 ?>