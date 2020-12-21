<?php
include('../../../koneksi.php');

$KODELABUJIAN	 	= $_GET['KODELABUJIAN'];

$SQL = mysqli_query($koneksi, "DELETE FROM labkomujian 
WHERE KODELABUJIAN='$KODELABUJIAN'") or die (mysqli_error());
if ($SQL) {
    header('location:indexLabkomUjian.php');
}
?> 