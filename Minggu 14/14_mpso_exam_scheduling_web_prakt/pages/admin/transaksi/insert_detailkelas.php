<?php
include('../../../koneksi.php');


$KODEPROD = $_POST['prodi'];
$KODEKLS = $_POST['kodekelas'];
$KODEPECAH = $_POST['kelasparalel'];
$KODETA = $_POST['kodethnajaran'];
$KODEMK = $_POST['kodematkul'];
$KODESEM = $_POST['kodesemester'];
$KODENIP = $_POST['nip'];
$KODEJM = $_POST['jumlahmahasiswa'];
$KODEANGKAT = $_POST['tahunangkatan'];
$KODEFAK = $_POST['fak'];


$SQL = mysqli_query($koneksi,"insert into detailkelas values('$KODEPROD' ,'$KODEKLS' ,'$KODEPECAH' ,'$KODETA' ,'$KODEMK' ,'$KODESEM' ,'$KODENIP' ,'$KODEJM' ,'$KODEANGKAT' ,'$KODEFAK')") or die (mysqli_error($koneksi));
//*
if($SQL){
    echo '<script language="javascript">';
    
    echo '</script>';
    echo "<META http-equiv='refresh' content='0;URL=insertview_trans_kelas.php'>";
} 
else echo "<META http-equiv='refresh' content='0;URL=insertview_trans_kelas.php'>";
//*/
?>

