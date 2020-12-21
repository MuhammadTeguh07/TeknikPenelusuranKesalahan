<?php
include('../../../koneksi.php');


$KODELABUJIAN = $_POST['kodelabujian'];
$KODELAB = $_POST['kodelab'];
$KODETHNAJAR = $_POST['kodethnajaran'];
$KODESM = $_POST['kodesemester'];

$SQL = mysqli_query($koneksi,"insert into labkomujian values('$KODELABUJIAN' ,'$KODELAB' ,'$KODETHNAJAR' ,'$KODESM')") or die (mysqli_error($koneksi));
//*
if($SQL){
    echo '<script language="javascript">';
    echo '</script>';
    echo "<META http-equiv='refresh' content='0;URL=insertview_labkomujian.php'>";
} 
else echo "<META http-equiv='refresh' content='0;URL=insertview_labkomujian.php'>";
//*/
?>

