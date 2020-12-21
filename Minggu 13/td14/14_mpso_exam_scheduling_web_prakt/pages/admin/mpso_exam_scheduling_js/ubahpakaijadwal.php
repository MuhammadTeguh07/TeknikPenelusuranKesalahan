<?php
include('../../../koneksi.php');

$KODEJADWAL = $_REQUEST['kodejadwal'];

$SQL = mysqli_query($koneksi,"UPDATE penjadwalan
	set statuspakai = 0
	where KODEJADWAL = '".$KODEJADWAL."'") or die (mysqli_error($koneksi));
//*
if($SQL){
    echo '<script language="javascript">';
    echo 'alert("Sukses!")';
    echo '</script>';
    echo "<META http-equiv='refresh' content='0;URL=mpso_penjadwalan.php'>";
}
//*/
?>