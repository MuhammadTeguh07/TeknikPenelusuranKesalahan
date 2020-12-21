<?php
include('../../../koneksi.php');

$NAMAKLS = $_POST['namakelas'];
$KODEKLS = $_POST['kodekls'];

$SQL = mysqli_query($koneksi,"update kelas set namakelas='$NAMAKLS', kodekelas='$KODEKLS' WHERE kodekelas='$KODEKLS'") or die (mysql_error());
if ($SQL) {
	echo '<script language="javascript">';
	echo 'alert("Sukses!")';
	echo '</script>';
	echo "<META http-equiv='refresh' content='0;URL=insertview_kelas.php'>";
}

?>