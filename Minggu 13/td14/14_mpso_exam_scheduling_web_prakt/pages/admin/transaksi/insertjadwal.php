<?php
session_start();

include('../../../koneksi.php');

date_default_timezone_set("Asia/Jakarta");
$tgl = date("Y-m-d h:i:sa");

$NIP = $_SESSION['username'];
$KODEJADWAL = $_POST['kodejadwal'];
$KODEFAK = $_POST['fakultas'];
$KODEPRODI = $_POST['prodi'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];
$KODEMASAUJIAN = $_POST['kodemasaujian'];

$SQL = mysqli_query($koneksi,"insert into penjadwalan values('$KODEJADWAL','$tgl','$NIP','$KODEFAK','$KODEPRODI','$KODESEMESTER','$KODETHNAJARAN','$KODEMASAUJIAN','MENUNGGU','1')") or die (mysqli_error($koneksi));
if($SQL){
	header('location:insertview_jadwal.php');
}
?>

