<?php

include("string_to_array.php");
include("include/koneksi.php");
include("include/matriks.php");
		
  if(isset($_POST['categories'])) {
    $sJson = $_POST['categories'];
	$ba1 = new BuatArray();		
	$dataM = $ba1->buatMatriksData($sJson);
	$bar = count($dataM);
	$baca_slotisi = mysqli_query($dbhandle,"SELECT * FROM slotisi ORDER BY id ASC");	
	$baris = 0;
	$nil_id_min = array();
	while($row = mysqli_fetch_row($baca_slotisi)){
			$nil_id_min[$baris] = $row;
			$baris++;
		}
		
	if($baris != 0){ 	
		$vSort = $ba1->ambilSatuKolomMatriks($nil_id_min ,22);
		sort($vSort);
		$nilKet = $vSort[count($vSort)-1];
		if($bar < $nil_id_min[0][0]) $baris = 0;	
			
	} else 	{
	$nilKet = 0;
}

	$bar = count($dataM);
    $k23 = $nilKet + 1;	
	$iter = 0;
	for($j=0;$j<$bar;$j++){
		$baris++;	
			$k2 = $dataM[$iter][0];
			$k3 = $dataM[$iter][1];
			$k4 = $dataM[$iter][2];
			$k5 = $dataM[$iter][3];
			$k6 = $dataM[$iter][4];
			$k7 = $dataM[$iter][5];
			$k8 = $dataM[$iter][6];
			$k9 = $dataM[$iter][7];
			$k10 = $dataM[$iter][8];
			$k11 = $dataM[$iter][9];
			$k12 = $dataM[$iter][10];
			$k13 = $dataM[$iter][11];
			$k14 = $dataM[$iter][12];
			$k15 = $dataM[$iter][13];
			$k16 = $dataM[$iter][14];
			$k17 = $dataM[$iter][15];
			$k18 = $dataM[$iter][16];
			$k19 = $dataM[$iter][17];
			$k20 = $dataM[$iter][18];
			$k21 = $dataM[$iter][19];
			$k22 = $dataM[$iter][20];
			$k24 = $_POST['KODEJADWAL'];
			$tambah = "INSERT INTO slotisi VALUES ('$baris','$k2', '$k3','$k4', '$k5', '$k6','$k7','$k8','$k9', '$k10','$k11', '$k12', '$k13','$k14', '$k15','$k16','$k17','$k18','$k19','$k20','$k21','$k22','$k24','$k23')";
			
			$result = mysqli_query($dbhandle,$tambah);
			$iter++;
    }	
    header('location:mpso.php?kd='.$k24);
	} 
	else {
		   echo "error";
		 }
mysqli_close($dbhandle);
?>
