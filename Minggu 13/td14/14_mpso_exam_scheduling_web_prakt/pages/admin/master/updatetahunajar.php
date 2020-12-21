<?php
include('../../../koneksi.php');

$NAMAFAK = $_POST['namafakultas'];
$KODEFAK = $_POST['kodefak'];

$SQL = mysqli_query($koneksi,"update fakultas set namafakultas='$NAMAFAK', kodefakultas='$KODEFAK' WHERE kodefakultas='$KODEFAK'") or die (mysql_error());
if ($SQL) {
	echo '<script language="javascript">';
		echo 'alert("Sukses!")';
		echo '</script>';
		echo "<META http-equiv='refresh' content='0;URL=insertview_tahunajar.php'>";
}

?>