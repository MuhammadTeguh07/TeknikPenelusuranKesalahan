<?php 
 session_start();
 include "koneksi.php";
 $nim1=$_SESSION['NIM1'];
$nim=$nim1;

 @$nim=$_REQUEST['nim'];
 @$nama=$_REQUEST['nama'];
 @$id_kota=$_REQUEST['id_kota'];
 @$email=$_REQUEST['email'];
 echo $nim;
 //if(isset($idpelaksanaan,$namapelaksanaan,$tglpelaksanaan,$tahun,$batas))
 //{
 //mysql_query("INSERT detail_berkas SET status_validasi='$sf' WHERE id_jenis='$if' and id_pendaftaran='$pend'");
 //header("Location:index.php?nim=".$_REQUEST['nim']);
 
 
 //}
 //else
  //{	  
	  //header("Location:login.php");
  //}

 ?>