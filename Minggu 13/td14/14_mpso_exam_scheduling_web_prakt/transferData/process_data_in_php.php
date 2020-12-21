<?php

  include "string_to_array.php";
  include "../koneksi.php";
  include("../include/matriks.php");

 echo "Proses perhitungan sudah selesai dan hasilnya telah disimpan di database ...! \n";		
//*
  if(isset($_POST['categories'])) {
    $sJson = $_POST['categories'];
	//echo "hasil POST : ".$sJson." \n"; 
	
	$ba1 = new BuatArray();		
	$dataM = $ba1->buatMatriksData($sJson);
	//echo "matriks data : \n";
	//$ba1->tampilMatriks($dataM);
	$bar = count($dataM);
	$kdjwl_baru =  $dataM[0][21];
	//echo "baris dataM : ".$bar." <br>";
	//echo json_encode($dataM);
	
	// echo "*********  SELECT count(*) FROM ruang_coba WHERE 1  ********* <br> ";
	$sql2=mysql_query("select nilaifitness, kodejadwal FROM slotisi group by kodejadwal"); // ORDER BY nilaifitness DESC");
	
	$sama = false;
	while($row2 = mysql_fetch_array($sql2)){
		    if($kdjwl_baru === $row2['kodejadwal']) {
				$sama = true;	
				$kdjwl=$row2['kodejadwal'];	
				$nil_fit = $row2['nilaifitness'];				
				}				
			}
			
	
	//if($row2) $nil_fit = $row2['nilaifitness'];  else $nil_fit = 10;
	

	$proses = 0;
	$nilKet=0;
	if($sama){ 
		echo "=== kdjwl_baru === kdjwl : TRUE <br>";
		if($nil_fit < $dataM[0][20]){	
			$proses = 1;
			$sql3=mysql_query("delete from slotisi where kodejadwal= '$kdjwl' ");
			//echo "=== nilKet : ".$nilKet." <br>";
		} 		
	} else {
		echo "=== kdjwl_baru === kdjwl : FALSE <br>";
		//$sql4=mysql_query("delete from slotisi where kodejadwal= '$kdjwl_baru' ");
		$proses = 1;	
	}
	
	if($proses == 1){
		$no_id = mysql_query("select id from slotisi order by id desc limit 1");
		$hit_bar = mysql_fetch_array($no_id);
		$baris = $hit_bar['id'];
		echo "baris : ".$baris." <br>";
		$k24 = $nilKet + 1;	
		$iter = 0;
		for($j=0;$j<$bar;$j++){
			$baris++;
		//for($i=0;$i<$kol;$i++){			
			//echo "baris : ".$baris." <br>";	
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
			$k23 = $dataM[$iter][21];
		//mysql_query("INSERT INTO slotisi (id_ruang, nama_ruang, kapasitas_ruang, ket) VALUES ($baris , '$nilKet[i][0]', $mat_ruang_php[i][1],$nilKet + 1)");
			$tambah = "INSERT INTO slotisi (id, noslot,noruang,nohari,nojam, nomk,kp,"
			."KODEPRODI,KODEKELAS,kdpecah,KODEMATKUL,semester,NIPDosen1,NIPDosen2,"
			."NIPpeg1,NIPpeg2,JUMLAHMAHASISWA,TAHUNANGKATAN,KODETHNAJARAN,KODESEMESTER,masaujian,nilaifitness,kodejadwal,ket) VALUES"
			."('$baris' , '$k2', '$k3','$k4', '$k5', '$k6','$k7','$k8',"
			."'$k9', '$k10','$k11', '$k12', '$k13','$k14', '$k15','$k16',"
			."'$k17','$k18','$k19','$k20','$k21','$k22','$k23','$k24')";
			
			$result = mysql_query($tambah);
		//if($result) echo ("Data Input OK <br>");
		//	else echo ("Data Input Failed <br>");
		//echo "nilKet : ".mysql_result($result,0,0)." <br>";
			//}
			$iter++;
			}		
		
			//header('location:mpso_penjadwalan.php');
		} //end of if($row2['nilaifitness']>$dataM[0][21])
	else {
		   echo "Noooooooob";
		 }
  }//  

//mysql_close($koneksi);

 //echo "lewat proses POST ...! "; // "<br />";
?>