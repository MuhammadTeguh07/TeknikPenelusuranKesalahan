<?php
include('../../../koneksi.php');

$KODELABUJIAN 		= $_POST['kodeLu'];
$KODELAB 	        = $_POST['kodeLab'];
$KODETHNAJARAN 	    = $_POST['kd_thn_ajar'];
$KODESEMESTER 	    = $_POST['kodesemester'];

$SQL = mysqli_query($koneksi,"UPDATE labkomujian set KODELABUJIAN = '$KODELABUJIAN', KODELAB = '$KODELAB', 
KODETHNAJARAN='$KODETHNAJARAN', KODESEMESTER='$KODESEMESTER' WHERE KODELABUJIAN='$KODELABUJIAN'") or die (mysqli_error($koneksi));
if ($SQL) {
	header('location:indexLabkomUjian.php');
}

?>