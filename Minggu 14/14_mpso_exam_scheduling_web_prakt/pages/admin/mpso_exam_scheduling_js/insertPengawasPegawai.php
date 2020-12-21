<?php
session_start();

include('../../../koneksi.php');

$PEGAWAI = $_POST['pegawai'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];
$KODEMASAUJIAN = $_POST['kodemasaujian'];

$SQL = mysqli_query($koneksi, "INSERT into pengawaspegawai values('$PEGAWAI','$KODETHNAJARAN','$KODESEMESTER','$KODEMASAUJIAN')") or die (mysqli_error($koneksi));
if($SQL){
	header('location:indexPengawasPegawai.php');
}
?>

