<?php
include('../../../koneksi.php');

$KODELABUJIAN = $_GET['kodelabujian'];
$SQL = mysqli_query($koneksi,"DELETE FROM labkomujian WHERE kodelabujian='$KODELABUJIAN'") or die (mysqli_error($koneksi));
if ($SQL) {
    echo '<script language="javascript">';
		echo 'alert("Sukses!")';
		echo '</script>';
		echo "<META http-equiv='refresh' content='0;URL=insertview_labkomujian.php'>";
}
?>