<?php 
require '../phpadmin/admconnectdb.php';

$id = '';
$judulbuku = $_POST['judulbuku'];
$isbn = $_POST['isbn'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$kategori = $_POST['kategori'];
$jmlhalaman = $_POST['halamanbuku'];
$tahunterbit = $_POST['tahunterbit'];
$deskripsi = $_POST['deskripsi'];
$jumlahbuku = $_POST['jumlahbuku'];


if(isset($_POST['submit'])){
	$ekstensi_diperbolehkan	= array('png','jpg','jpeg','gif','PNG');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	

	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){
			$upload_ke_folder = "../images/upload/".$nama;			
			move_uploaded_file($file_tmp, $upload_ke_folder);
			$query = mysqli_query($connection, "INSERT INTO tb_buku VALUES ('$id','$judulbuku','$isbn','$penulis','$penerbit','$kategori','$jmlhalaman','$tahunterbit','$deskripsi','$jumlahbuku','$nama')");	
			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
			} else {
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		} else {
			echo 'UKURAN FILE TERLALU BESAR';
		}
	} else {
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	}
}













?>