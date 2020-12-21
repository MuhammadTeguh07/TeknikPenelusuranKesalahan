<?php
include('../../../koneksi.php');
$t = $_GET['t'];
	echo '<select class="form-control" name="ruang2" id="ruang2" required >
     <option value="null" selected="selected">-- Pilih --</option>';
 	
	$q6 = mysqli_query($koneksi, "SELECT * FROM ruangan WHERE `KODERUANG`<>'".$t."' order by NAMARUANGAN") or die (mysqli_error($koneksi));
	while($b6 = mysqli_fetch_array($q6)){
		echo "<option value='".$b6[0]."'>".$b6[3]."</option>";
        }
	echo '</select><br>';
?>
