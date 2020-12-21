<?php
include('../../../koneksi.php');

$KODERU 	 	= $_GET['KODERU'];
$KODERUANG1	 	= $_GET['KODERUANG1'];
$KODERUANG2	 	= $_GET['KODERUANG2'];
$KODETHNAJARAN	 	= $_GET['KODETHNAJARAN'];
$KODESEMESTER	 	= $_GET['KODESEMESTER'];

$SQL = mysqli_query($koneksi, "DELETE FROM ruangujian WHERE KODERU='$KODERU'") or die (mysqli_error($koneksi));
if ($SQL) {
    header('location:indexRuangUjian.php');
}
?> 