<?php
include('../../../koneksi.php');

$KODETHN = $_GET['kodethnajaran'];
$SQL = mysqli_query($koneksi,"DELETE FROM TAHUNAJARAN WHERE kodethnajaran='$KODETHN'") or die (mysqli_error($koneksi));
if ($SQL) {
    echo '<script language="javascript">';
		echo 'alert("Sukses!")';
		echo '</script>';
		echo "<META http-equiv='refresh' content='0;URL=insertview_tahunajar.php'>";
}
?>