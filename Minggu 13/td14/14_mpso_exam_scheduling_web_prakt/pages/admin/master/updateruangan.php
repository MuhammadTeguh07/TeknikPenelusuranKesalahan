<?php
include('../../../koneksi.php');

$KODERNG = $_POST['koderuangan'];
$NAMARNG = $_POST['namaruangan'];
$KAPASITASRNG = $_POST['kapasitasruangan'];
$KAPASITASUJI = $_POST['kapasitasruangujian'];

//echo "kd_ruang : ".$KODERNG.", NAMARNG : ".$NAMARNG.", KAPASITASRNG : ".$KAPASITASRNG." dan KAPASITASUJI : ".$KAPASITASUJI."<br />";

$SQL = mysqli_query($koneksi,"update ruangan set koderuang='$KODERNG',kapasitasruang='$KAPASITASRNG',kapasitasujian='$KAPASITASUJI',namaruangan='$NAMARNG' WHERE koderuang='$KODERNG'") or die (mysqli_error($koneksi));

if ($SQL) {
	echo '<script language="javascript">';
	echo 'alert("Sukses!")';
	echo '</script>';
	echo "<META http-equiv='refresh' content='0;URL=insertview_ruangan.php'>";
}

?>