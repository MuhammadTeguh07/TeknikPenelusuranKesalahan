<?php
include('../../../koneksi.php');


$KODELABUJIAN = $_POST['kodelabujian'];
$KODELAB = $_POST['kodelab'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];

$SQL = mysqli_query($koneksi,"UPDATE labkomujian
	set KODELAB='$KODELAB' ,KODETHNAJARAN='$KODETHNAJARAN' ,KODESEMESTER='$KODESEMESTER'
	where KODELABUJIAN = '$KODELABUJIAN'") or die (mysqli_error($koneksi));
//*
if($SQL){
    echo '<script language="javascript">';
    echo 'alert("Sukses!")';
    echo '</script>';
    echo "<META http-equiv='refresh' content='0;URL=insertview_labkomujian.php'>";
} 
else echo "<META http-equiv='refresh' content='0;URL=insertview_labkomujian.php'>";
//*/
?>