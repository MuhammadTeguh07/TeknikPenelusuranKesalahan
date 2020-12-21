<?php
include('../../../koneksi.php');


$KODERU = $_POST['koderuangujian'];
$KODERUANG1 = $_POST['ruang1'];
$KODERUANG2 = $_POST['ruang2'];

$totalkapasitas = mysqli_query($koneksi,"SELECT sum(kapasitasujian) FROM ruangan WHERE KODERUANG = '$KODERUANG1' OR KODERUANG = '$KODERUANG2'");
$KAPASITAS = mysqli_fetch_array($totalkapasitas)[0];

$SQL = mysqli_query($koneksi,"UPDATE ruangujian
	set KODERUANG1='$KODERUANG1' ,KODERUANG2='$KODERUANG2' ,KAPASITAS='$KAPASITAS'
	where KODERU = '$KODERU'") or die (mysqli_error($koneksi));
//*
if($SQL){
    echo '<script language="javascript">';
    echo '</script>';
    echo "<META http-equiv='refresh' content='0;URL=insertview_ruangujian.php'>";
} 
else echo "<META http-equiv='refresh' content='0;URL=insertview_ruangujian.php'>";
//*/
?>

