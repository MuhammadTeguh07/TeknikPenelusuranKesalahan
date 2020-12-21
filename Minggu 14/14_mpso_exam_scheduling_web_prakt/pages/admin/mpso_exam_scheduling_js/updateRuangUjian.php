<?php
include('../../../koneksi.php');

$KODERU             = $_POST['koderu'];
$KODERU1     		= $_POST['kodeRU1'];
$KODERU2	        = $_POST['kodeRU2'];

$SQL = mysqli_query($koneksi,"UPDATE ruangujian set KODERU = '$KODERU', KODERUANG1 = '$KODERU1', 
KODERUANG2='$KODERU2' WHERE KODERU='$KODERU'") or die (mysqli_error($koneksi));
if ($SQL) {
	header('location:indexRuangUjian.php');
}

?>