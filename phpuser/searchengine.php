<?php 

  $input_cari = $_POST['search']; 
   $cari = $_POST['submit'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("SELECT * FROM tb_buku WHERE judul LIKE '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("SELECT * FROM tb_buku") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("SELECT * FROM tb_buku") or die (mysql_error());
    }

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
   	echo '     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center style="padding:10px;""> Data Tidak Ditemukan</td>
     </tr>';

    
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {



   }
}



 ?>