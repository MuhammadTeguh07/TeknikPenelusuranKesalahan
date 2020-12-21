<?php
include('../../../koneksi.php');
$t = $_GET['t'];
$kl = $_GET['kl'];
$sm = $_GET['sm'];
	echo '<select class="form-control" name="kodematkul" id="matkul" required>
     <option value="null" selected="selected">-- Pilih --</option>';
	// $queryajar = mysql_query("SELECT detailajar.nip, pegawai.namapegawai,detailajar.kodematkul,matakuliah.namamatkul,
 //        detailajar.`KODETHNAJARAN`,tahunajaran.`TAHUNAJARAN`,detailajar.`KODESEMESTER`,semester.`NAMASEMESTER`
 //        FROM detailajar INNER JOIN matakuliah INNER JOIN pegawai INNER JOIN tahunajaran INNER JOIN semester
 //        ON pegawai.`NIP` =detailajar.`NIP` AND matakuliah.`KODEMATKUL`=detailajar.`KODEMATKUL` AND
 //        tahunajaran.`KODETHNAJARAN`=detailajar.`KODETHNAJARAN` AND semester.`KODESEMESTER`=detailajar.`KODESEMESTER` WHERE detailajar.nip='".$t."' group by detailajar.kodematkul") or die (mysql_error());

     $query = mysqli_query($koneksi,"
        SELECT m.`KODEMATKUL`,m.NAMAMATKUL FROM detailkelas d
        JOIN matakuliah m ON d.KODEMATKUL = m.KODEMATKUL
        WHERE (d.`KODEPRODI`='".$t."' AND d.`KODEKELAS` = '".$kl."') AND (d.`KODESEMESTER` = '".$sm."' AND m.STATUSAKTIF = 'Aktif') GROUP BY m.`KODEMATKUL`"
    );

        //$satuan = $queryjabatan['namajabatan'];
        while($matkuls = mysqli_fetch_array($query)){
            echo "<option value='".$matkuls[0]."'>".$matkuls[1]."</option>";
        }
	
	//$q6 = mysql_query("SELECT * FROM prodi WHERE `KODEFAKULTAS`='".$t."'") or die (mysql_error());
	//while($b6 = mysql_fetch_array($q6)){
	//	echo "<option value='".$b6[0]."'>".$b6[2]."</option>";
    //    }
	echo '</select><br>';
?>
