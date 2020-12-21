<?php 
 session_start();
 include "koneksi.php";
 $nim1=$_SESSION['NIM1'];
 $nim=$nim1;
 @$total=$_POST['totalala'];
 //echo $_POST['totalala'];
 echo $total;
?>