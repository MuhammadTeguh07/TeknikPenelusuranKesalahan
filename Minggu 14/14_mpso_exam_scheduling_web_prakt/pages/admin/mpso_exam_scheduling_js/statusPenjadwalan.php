<?php
include('../../../koneksi.php');

$KODEJADWAL = $_GET['KODEJADWAL'];
$STATUS = $_GET['statuspakai']; 
if($STATUS==1){
    $nil=0; 
}
else{
    $nil=1;
}

$SQL = mysqli_query($koneksi,"UPDATE penjadwalan SET statuspakai = '$nil' WHERE KODEJADWAL='$KODEJADWAL'") or die (mysqli_error($koneksi));

if ($SQL) {
    header('location:indexPenjadwalan.php');
}

?>