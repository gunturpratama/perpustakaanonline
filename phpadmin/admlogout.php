<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo "Sampai jumpa lagi";
header("location:../admin/index.php"); //to redirect back to "index.php" after logging out
exit();
?>