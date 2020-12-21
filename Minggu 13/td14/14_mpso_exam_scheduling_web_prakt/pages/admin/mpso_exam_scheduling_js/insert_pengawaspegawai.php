<?php
include('../../../koneksi.php');


$nip = $_POST['nip'];
$KODETHNAJAR = $_POST['kodethnajaran'];
$KODESM = $_POST['kodesemester'];
$masaujian = $_POST['masaujian'];

$SQL = mysqli_query($koneksi,"insert into pengawaspegawai values('$nip' ,'$KODETHNAJAR' ,'$KODESM' ,'$masaujian')") or die (mysqli_error($koneksi));
//*
if($SQL){
    echo '<script language="javascript">';
    echo '</script>';
    echo "<META http-equiv='refresh' content='0;URL=insertview_pengawaspegawai.php'>";
}
//*/
?>

