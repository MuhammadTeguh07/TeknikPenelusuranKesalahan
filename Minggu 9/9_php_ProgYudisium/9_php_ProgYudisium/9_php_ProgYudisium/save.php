<?php 
 session_start();
 include "koneksi.php";
 if (isset($_POST['Login'])){
	 
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 // Mencari User yang cocok yang ada di tabel database
 $cek_user_mhs = mysql_query("SELECT * FROM mahasiswa WHERE NIM = '$user' AND PASSWORD = '$pass' ");
 $cek_user_dos = mysql_query("SELECT * FROM dosen WHERE NIP = '$user' AND PASSWORD = '$pass' ");
 $cek_user_peg = mysql_query("SELECT * FROM pegawai WHERE ID_PEG = '$user' AND PASSWORD = '$pass' ");
 echo"salah";
 if (mysql_num_rows($cek_user_mhs)==1){
  $hasil = mysql_fetch_array($cek_user_mhs);
  // Simpan Session USER
        $_SESSION['NIM'] = $hasil['NIM'];
		header("location:mahasiswa/index.php");
  }else if (mysql_num_rows($cek_user_dos)==1){
  $hasil = mysql_fetch_array($cek_user_dos);
  // Simpan Session USER
        $_SESSION['NIP'] = $hasil['NIP'];
		header("location:kps/index.php");
  } else if (mysql_num_rows($cek_user_peg)==1){
  $hasil = mysql_fetch_array($cek_user_peg);
  // Simpan Session USER
        $_SESSION['ID_PEG'] = $hasil['ID_PEG'];
		header("location:tu/index.php");
  }  else
  {	  
	  header("Location:login.php");
  }
 
 }

 ?>