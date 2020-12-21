<?php
    include('../../../koneksi.php');
    $t = $_GET['t'];
    echo '<select class="form-control" name="RU2" id="RU2" required>
    <option value="-" selected="selected">-- Pilih --</option>';
	$querythn = mysqli_query($koneksi,"select KODERUANG,NAMARUANGAN from RUANGAN") or die (mysqli_error());		
    while($baristhn = mysqli_fetch_array($querythn)){
        echo "<option value='".$baristhn[0]."'>".$baristhn[1]."</option>";
    }
    echo '</select><br>';
?>
 