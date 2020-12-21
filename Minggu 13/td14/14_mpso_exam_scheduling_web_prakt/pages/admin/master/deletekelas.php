<?php
include('../../../koneksi.php');

$KODEKLS = $_GET['kodekelas'];
$SQL = mysqli_query($koneksi,"DELETE FROM KELAS WHERE kodekelas='$KODEKLS'") or die (mysql_error());
if ($SQL) {
echo '<script language="javascript">';
		echo 'alert("Sukses!")';
		echo '</script>';
		echo "<META http-equiv='refresh' content='0;URL=insertview_kelas.php'>";
}
?>