<?php
include('../../../koneksi.php');
$t = $_GET['t'];
	echo '<select class="form-control" name="prodi" id="prodi" required>
     <option value="null" selected="selected">-- Pilih --</option>';
        $q6 = mysqli_query($koneksi,"select * from prodi where KODEFAKULTAS='".$t."'") or die (mysqli_error());
        while($b6 = mysqli_fetch_array($q6)){
            echo "<option value='".$b6[0]."'>".$b6[2]."</option>";
        }
echo '</select>';
?>