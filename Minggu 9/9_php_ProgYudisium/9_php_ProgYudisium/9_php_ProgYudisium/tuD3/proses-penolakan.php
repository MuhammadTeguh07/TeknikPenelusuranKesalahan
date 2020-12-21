<?php 
session_start();
 include "koneksi.php";
 @$idpeg=$_SESSION['ID_PEG1'];
 @$nim=$_REQUEST['nim'];
 @$pelaksanaan=$_REQUEST['pelaksanaan'];
 @$pendaftaran=$_REQUEST['pendaftaran'];
								$a1 = "SELECT MAX(ID_DETAIL_PELAKSANAAN) FROM detail_pelaksanaan";
								$b1 = mysql_query($a1);
								$c1 = mysql_fetch_array($b1);
								list($maks) = mysql_fetch_row($b1);
								$max = $c1[0];
								$detail = substr($max, 2, 4);
								$detail = $detail + 1;
								if($detail <= 9) $detail = "DP000".$detail;
								if($detail <= 99 && $detail > 9) $detail = "DP00".$detail;
								if($detail <= 999 && $detail > 99) $detail = "DP0".$detail;
								if($detail <= 9999 && $detail > 999) $detail = "DP".$detail;
								//echo $detail;
	@$countdown = mysql_fetch_array(mysql_query("SELECT sum(day(p.BATAS_AKHIR)-day(CURRENT_DATE)) as countdown, NAMA_PELAKSANAAN, ID_PELAKSANAAN, BATAS_AWAL, BATAS_AKHIR FROM pelaksanaan_yudisium p WHERE (BATAS_AWAL<CURRENT_DATE or BATAS_AWAL=CURRENT_DATE) and (BATAS_AKHIR>CURRENT_DATE or BATAS_AKHIR=CURRENT_DATE)"));
	$period = $countdown[2];
 @$date2=date('Y-m-d');
  $pelaksanaan = mysql_query ("INSERT INTO `detail_pelaksanaan`(`ID_PELAKSANAAN`, `ID_PENDAFTARAN`, `TGL_KEPUTUSAN_YUDISIUM`, `STATUS_LULUS`, `ID_DETAIL_PELAKSANAAN`) VALUES ('$period','$pendaftaran','$date2','2', '$detail')")or die (mysql_error());
  //echo "INSERT INTO `detail_pelaksanaan`(`ID_PELAKSANAAN`, `ID_PENDAFTARAN`, `TGL_KEPUTUSAN_YUDISIUM`, `STATUS_LULUS`, `ID_DETAIL_PELAKSANAAN`) VALUES ('$period','$pendaftaran','$date2','1', '$detail'";
 //mysql_query($insert) or die (mysql_error());
 
//header("location:proses-penerimaan-yudisium.php?nim=".$_REQUEST['nim']."&detail=".$_REQUEST['detail']");
echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=proses-penolakan-yudisium.php?nim=$nim&detail=$detail\">");
 //echo $nim;
?>