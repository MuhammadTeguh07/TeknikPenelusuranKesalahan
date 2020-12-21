<?php
session_start();

include('../../../koneksi.php');

$DOSEN = $_POST['dosen'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];
$KODEMASAUJIAN = $_POST['kodemasaujian'];

$SQL = mysqli_query($koneksi, "INSERT into pengawasdosen values('$DOSEN','$KODETHNAJARAN','$KODESEMESTER','$KODEMASAUJIAN')") or die (mysqli_error($koneksi));
if($SQL){
	header('location:indexPengawasDosen.php');
}
?>

