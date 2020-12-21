<?php 
session_start();
 include "koneksi.php";
 @$idpeg=$_SESSION['ID_PEG1'];
 if (isset($_POST['simpan'])){
@$idpelaksanaan=$_REQUEST['idpelaksanaan'];
@$id_periode=$_REQUEST['id_periode'];
@$namapelaksanaan=$_REQUEST['namapelaksanaan'];
@$tglpelaksanaan=$_REQUEST['tglpelaksanaan'];
@$batas=$_REQUEST['batas'];

@$date1 = date('Y-m-d', strtotime($tglpelaksanaan));
@$date2 = date('Y-m-d', strtotime($batas));

		mysql_query("UPDATE `pelaksanaan_yudisium` SET `ID_PERIODE`='$id_periode',`NAMA_PELAKSANAAN`='$namapelaksanaan',`BATAS_AWAL`='$date1',`BATAS_AKHIR`='$date2' WHERE ID_PELAKSANAAN='$idpelaksanaan'");
		//mysql_query("insert into pelaksanaan_yudisium values ('$idpelaksanaan','$idpeg','$id_periode','$namapelaksanaan','$date1','$date2')");
			echo "<script>alert('Data Berhasil Disimpan!!!!!!!!');</script>";
				echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=pelaksanaan.php\">");
		}
		else
			{	  
	  echo "<script>alert('Gagal!!!!!!!!');</script>";
				echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=pelaksanaan.php\">");
			}
?>