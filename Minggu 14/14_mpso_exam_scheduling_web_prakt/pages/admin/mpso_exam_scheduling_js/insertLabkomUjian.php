<?php
session_start();

include('../../../koneksi.php');

$KODELU = $_POST['kodeLU'];
$NAMALAB = $_POST['namalab'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];

$SQL = mysqli_query($koneksi, "INSERT into labkomujian values('$KODELU','$NAMALAB','$KODETHNAJARAN','$KODESEMESTER')") or die (mysqli_error($koneksi));
if($SQL){
	header('location:indexLabkomUjian.php');
}
?>

