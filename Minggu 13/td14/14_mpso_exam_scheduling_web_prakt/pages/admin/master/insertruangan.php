<?php
include('../../../koneksi.php');

$KODERNG = $_POST['koderuangan'];
$NAMARNG = $_POST['namaruangan'];
$KAPASITAS1 = $_POST['kapasitasruangan'];
$KAPASITAS2 = $_POST['kapasitasruangujian'];

$SQL = mysqli_query($koneksi,"insert into ruangan values('$KODERNG','$KAPASITAS1','$KAPASITAS2','$NAMARNG')") or die (mysqli_error($koneksi));
if($SQL){
	echo '<script language="javascript">';
	echo 'alert("Sukses!")';
	echo '</script>';
	echo "<META http-equiv='refresh' content='0;URL=insertview_ruangan.php'>";
}
?>

