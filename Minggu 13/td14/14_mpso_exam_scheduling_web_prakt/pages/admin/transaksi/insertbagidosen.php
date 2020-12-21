<?php
include('../../../koneksi.php');

$NIPs = $_POST['nip'];
$KODEMATKUL = $_POST['kodematkul'];
$KODETHNAJARAN = $_POST['kodethnajaran'];
$KODESEMESTER = $_POST['kodesemester'];

foreach($NIPs as $nip){
    $SQL = mysqli_query($koneksi,"insert into detailajar values('$nip','$KODEMATKUL','$KODETHNAJARAN','$KODESEMESTER',1)") or die (mysqli_error($koneksi));
}
if($SQL){
	header('location:insertview_bagidosen.php');
}
?>

