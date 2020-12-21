<?php
include('../../../koneksi.php');

$NIP	 	= $_GET['nip'];

$SQL = mysqli_query($koneksi, "DELETE FROM pengawasdosen WHERE nip='$NIP'") or die (mysqli_error());
if ($SQL) {
    header('location:indexPengawasDosen.php');
}
?> 