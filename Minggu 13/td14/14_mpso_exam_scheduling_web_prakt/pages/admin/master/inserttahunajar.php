<?php
include('../../../koneksi.php');

$KODETHN = $_POST['kodethnajaran'];
$NAMATHN = $_POST['tahunajaran'];

$SQL = mysqli_query($koneksi,"insert into tahunajaran values('$KODETHN','$NAMATHN')") or die (mysqli_error($koneksi));
if($SQL){
	echo '<script language="javascript">';
		echo 'alert("Sukses!")';
		echo '</script>';
		echo "<META http-equiv='refresh' content='0;URL=insertview_tahunajar.php'>";
}
?>

