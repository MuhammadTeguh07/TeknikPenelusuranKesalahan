<?php
include('../../../koneksi.php');

$NIP	 	= $_GET['nip'];
$KODETHNAJAR	 	= $_GET['kd_thn_ajar']; 
$KODESEMESTER	 	= $_GET['kd_semester'];

$SQL = mysqli_query($koneksi, "DELETE FROM pengawaspegawai WHERE nip='$NIP'") or die (mysqli_error());
if ($SQL) {
    header('location:indexPengawasPegawai.php');
}
?> 