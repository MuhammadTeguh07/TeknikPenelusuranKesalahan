<?php
session_start();

include('../../../koneksi.php');

$KODERU = $_POST['kodeRU'];
$RU1 = $_POST['RU1'];
$RU2 = $_POST['RU2'];
$KAPASITAS = $_POST['kapasitas'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];

$SQL = mysqli_query($koneksi, "INSERT into ruangujian values('$KODERU','$RU1','$RU2','$KAPASITAS','$KODETHNAJARAN','$KODESEMESTER')") or die (mysqli_error($koneksi));
if($SQL){
	header('location:indexRuangUjian.php');
}
?>

