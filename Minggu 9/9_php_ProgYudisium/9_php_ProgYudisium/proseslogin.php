<?php 
 session_start();
 include "koneksi.php";
 if (isset($_POST['Login'])){
	 
 $user=$_POST['user'];
 $pass1=$_POST['pass'];
 
 // Mencari User yang cocok yang ada di tabel database
 $cek_user_mhs = mysqli_query($kon, "SELECT * FROM mahasiswa m WHERE  m.NIM = '".$user."' AND m.PASSWORD = '".$pass1."'");
 $cek_user_dos = mysqli_query($kon, "SELECT D.NIP, D.PASSWORD, J.NAMA_JABATAN FROM DOSEN D, JABATAN J WHERE J.ID_JABATAN=D.ID_JABATAN AND D.NIP = '$user' AND 		D.PASSWORD = '$pass1' AND J.NAMA_JABATAN='Koordinator Program Studi' ");
 $cek_user_peg = mysqli_query($kon, "SELECT * FROM tata_usaha WHERE ID_PEG = '$user' AND PASSWORD = '$pass1'  ");
 //echo"salah";	
 if (mysqli_num_rows($cek_user_mhs)==1){
  $hasil1 = mysqli_fetch_array($cek_user_mhs);
	$date2=date('Y-m-d');
	$periode = mysqli_fetch_array(mysqli_query($kon, "SELECT count(*) from pelaksanaan_yudisium where (BATAS_AWAL<'$date2' or BATAS_AWAL='$date2') and (BATAS_AKHIR>'$date2' or BATAS_AKHIR='$date2')"));
	if ($periode[0]==1) { 
		$ceklulus = mysqli_fetch_array(mysqli_query($kon, "SELECT count(dp.status_lulus), p.id_pendaftaran FROM mahasiswa m, pendaftaran p, detail_pelaksanaan dp WHERE dp.id_pendaftaran=p.id_pendaftaran and p.NIM=m.NIM and m.NIM='$user' and dp.status_lulus='1'"));
			if ($ceklulus[0]==1) {
			?>
			<script language="JavaScript">
				alert('Maaf Anda tidak bisa Login lagi');
				document.location='login.php';
			</script>
			<?php
			} 
			else {
		$cekdaftar = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM mahasiswa m, pendaftaran p WHERE p.NIM=m.NIM and m.NIM='$user'"));
		if ($cekdaftar==0) {
			// Simpan Session USER
        $_SESSION['NIM1'] = $hasil1['NIM'];
			 header("location:mahasiswa/registrasi.php");
								
			}
		 else {
			 
			 $_SESSION['NIM1'] = $hasil1['NIM'];
		header("location:mahasiswa/index.php");
				
		}
			}
	} else { ?><script language="JavaScript">
				alert('Maaf Anda belum bisa login');
				document.location='login.php';
			</script>
			<?php }
 
  }else if (mysqli_num_rows($cek_user_dos)==1){
  $hasil3 = mysqli_fetch_array($cek_user_dos);
  // Simpan Session USER
        $_SESSION['NIP1'] = $hasil3['NIP'];
		header("location:kps/index.php");
  } else if (mysqli_num_rows($cek_user_peg)==1){
  $hasil4 = mysqli_fetch_array($cek_user_peg);
  // Simpan Session USER
        $_SESSION['ID_PEG1'] = $hasil4['ID_PEG'];
		header("location:tuD3/index.php");
  }  else
  {	  
	?><script language="JavaScript">
				alert('Maaf Username atau Password anda SALAH');
				document.location='login.php';
			</script>
			<?php
	  //header("Location:login.php");
  }
 
 }

 ?>