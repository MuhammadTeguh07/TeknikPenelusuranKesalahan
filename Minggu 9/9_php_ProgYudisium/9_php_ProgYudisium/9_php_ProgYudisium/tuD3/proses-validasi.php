<?php 
 session_start();
 include "koneksi.php";
 @$idpeg=$_SESSION['ID_PEG1'];
 @$date=date('Y-m-d');
@$periode = mysql_fetch_array(mysql_query("select * from pelaksanaan_yudisium where (BATAS_AWAL<'$date' or BATAS_AWAL='$date') and (BATAS_AKHIR>'$date' or BATAS_AKHIR='$date')"));
@$pel=$periode[0];
 if (isset($_POST['simpan'])){
	 
 $nim=$_REQUEST['nim'];
 @$pendaftaran=mysql_fetch_array(mysql_query("select id_pendaftaran from pendaftaran where nim='$nim'"));
 @$pend=$pendaftaran[0];
 if($_REQUEST['check_f']){
 mysql_query("UPDATE `detail_berkas` SET `STATUS_VALIDASI`='0' WHERE `ID_PENDAFTARAN`='$pend'");
 }
 else if(!isset($_REQUEST['check_f'])){
	 mysql_query("UPDATE `detail_berkas` SET `STATUS_VALIDASI`='0' WHERE `ID_PENDAFTARAN`='$pend'");
	 }
 
 foreach ($_REQUEST['check_f'] as $check) {
	 $sf=1;
	 $if=$check;
	mysql_query("UPDATE detail_berkas SET status_validasi='$sf' WHERE id_jenis='$if' and id_pendaftaran='$pend'");
	@$cekv=mysql_fetch_array(mysql_query("select count(id_jenis) from detail_berkas where id_pendaftaran='$pend' and status_validasi='1';"));
	@$cekberkas=mysql_fetch_array(mysql_query("select count(id_jenis) from jenis_berkas;"));
	if ( $cekv == $cekberkas ) {
		mysql_query("UPDATE pendaftaran SET `STATUS_MHS` = '1' WHERE ID_PENDAFTARAN = '$pend';");
		//$detailpelaksanaan1 = mysql_query ("UPDATE detail_pelaksanaan SET STATUS_LULUS='0' WHERE ID_PELAKSANAAN = '$pel' AND ID_PENDAFTARAN = '$pend';");
	} else {
		mysql_query("UPDATE pendaftaran SET `STATUS_MHS` = '0' WHERE ID_PENDAFTARAN = '$pend';");
		//$detailpelaksanaan2 = mysql_query ("UPDATE detail_pelaksanaan SET STATUS_LULUS='0' WHERE ID_PELAKSANAAN = '$pel' AND ID_PENDAFTARAN = '$pend';");
	}
 }
 header("Location:daftar-berkas-mahasiswa.php?nim=".$_REQUEST['nim']);
 
 
 }
 else
  {	  
	  header("Location:daftar-berkas-mahasiswa.php?nim=".$_REQUEST['nim']);
  }

 ?>