<?php
include('../../../koneksi.php');

$KODERNG = $_GET['koderuangan'];
$SQL = mysqli_query($koneksi,"DELETE FROM RUANGAN WHERE koderuang='$KODERNG'") or die (mysqli_error($koneksi));
if ($SQL) {
	echo '<script language="javascript">';
	echo 'alert("Sukses!")';
	echo '</script>';
	echo "<META http-equiv='refresh' content='0;URL=insertview_ruangan.php'>";
}
?>