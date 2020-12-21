<?php
include('../../../koneksi.php');

$KODERU = $_GET['koderu'];
$SQL = mysqli_query($koneksi,"DELETE FROM ruangujian WHERE koderu='$KODERU'") or die (mysqli_error($koneksi));
if ($SQL) {
    echo '<script language="javascript">';
		echo 'alert("Sukses!")';
		echo '</script>';
		echo "<META http-equiv='refresh' content='0;URL=insertview_ruangujian.php'>";
}
?>