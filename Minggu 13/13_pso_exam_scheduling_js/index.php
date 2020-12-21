<?php

include("../13_pso_exam_scheduling_js/include/koneksi.php");
include("../13_pso_exam_scheduling_js/include/matriks.php"); 
include("../13_pso_exam_scheduling_js/include/array_2dim.php");


?>


<!docfile html>
<head>

<script type = "text/javascript" src="../13_pso_exam_scheduling_js/include/PsoScheduling.js"> </script>
<script type = "text/javascript" src="../13_pso_exam_scheduling_js/include/jquery-3.2.1.min.js"></script>
<script type = "text/javascript" src="../13_pso_exam_scheduling_js/include/konversiArrayString.js"> </script>

</head>

<body>
	
<h1> </h1>

<?php
//PHP connect to MySQL
	$kd_fak = "fak001";
 	$kd_prodi = 'pro001';
	$kd_thn_ajaran = 'thn003';
	$kd_semester = 'sem001';
	$kd_masa_ujian = 0; // 0 => uts  dan 1 => uas
	
//****************************** RUANG ******************************
	$mat_ruang_php = ambil_data_tabel($dbhandle,"ruangan");
	$nRuang_php = count($mat_ruang_php ,0); 
	//echo "Ruang </br>"; 
//****************************** LABKOM ******************************
	$mat_labkom_php = ambil_data_tabel($dbhandle,"labkom");
	$nLabkom_php = count($mat_labkom_php ,0); 	
	//echo "sampai </br>";
//****************************** HARI ******************************
	$mat_hari_php = ambil_data_tabel($dbhandle,"hari");
	$nHari_php = count($mat_hari_php ,0); 	
//****************************** HARI UJIAN******************************
	$mat_hari_ujian_php = ambil_data_tabel($dbhandle,"hariujian");
	//$mat_hari_ujian_php = ambil_data_tabel("hariujian2");
	$nHari_ujian_php = count($mat_hari_ujian_php ,0); 
//****************************** JAM ******************************
	$mat_jam_php = ambil_data_tabel($dbhandle,"jam");
	$nJam_php = count($mat_jam_php ,0);  	
//****************************** PEGAWAI ******************************
	$mat_pegawai_php = ambil_data_tabel($dbhandle,"pegawai");
	$nPegawai_php = count($mat_pegawai_php ,0); 	
//****************************** matakuliah ******************************
	$mat_matakuliah_php = ambil_data_tabel($dbhandle,"matakuliah");
	$nMatakuliah_php = count($mat_matakuliah_php ,0); 	
//****************************** tahunajaran ******************************
	$mat_tahunajaran_php = ambil_data_tabel($dbhandle,"tahunajaran");
	$nTahunajaran_php = count($mat_tahunajaran_php ,0); 	
//****************************** semester ******************************
	$mat_semester_php = ambil_data_tabel($dbhandle,"semester");
	$nSemester_php = count($mat_semester_php ,0); 		
//****************************** fakultas ******************************
	$mat_fakultas_php = ambil_data_tabel($dbhandle,"fakultas");
	$nFakultas_php = count($mat_fakultas_php ,0); 	
//****************************** jabatan ******************************
	$mat_jabatan_php = ambil_data_tabel($dbhandle,"jabatan");
	$nJabatan_php = count($mat_jabatan_php ,0); 
//****************************** kelas ******************************
	$mat_kelas_php = ambil_data_tabel($dbhandle,"kelas");
	$nKelas_php = count($mat_kelas_php ,0); 	
//****************************** prodi ******************************
	$mat_prodi_php = ambil_data_tabel($dbhandle,"prodi");
	$nProdi_php = count($mat_prodi_php ,0); 	
//****************************** detailajar ******************************
	$mat_detailajar_php = ambil_data_tabel($dbhandle,"detailajar");
	$nDetailajar_php = count($mat_detailajar_php ,0); 		
//****************************** detailkelas ******************************
	$mat_detailkelas_php = ambil_data_tabel($dbhandle,"detailkelas");
	$nDetailkelas_php = count($mat_detailkelas_php ,0); 	
//****************************** pembagiankelas ******************************
	$mat_pembagiankelas_php = ambil_data_tabel($dbhandle,"pembagiankelas");
	$nPembagiankelas_php = count($mat_pembagiankelas_php ,0); 	
//****************************** banyaknya hari jumat ******************************
	$nj_php = 0;
	$awal = 0;
	$baca_nama_tabel_hu = mysqli_query($dbhandle,"SELECT * FROM hariujian ORDER BY TANGGALUJIAN");
	while($row = mysqli_fetch_row($baca_nama_tabel_hu)){
			if($awal == 0) {$kd_awal_hari_php = $row[1]; $awal = 1; }
			if($row[1] == 'hari05') { //$matTabel_php[$nj_php] = $row;
									  $nj_php++;	
									}
			}  
			
//****************************** detailkelas teori ******************************			
	$mat_kelas_teori_php = ambil_detailkelas($dbhandle,"detailkelas","matakuliah",$kd_thn_ajaran,"k");
	$nKelas_teori_php = count($mat_kelas_teori_php ,0); 
//****************************** detailkelas praktikum******************************	
	$mat_kelas_praktikum_php = ambil_detailkelas($dbhandle,"detailkelas","matakuliah",$kd_thn_ajaran,"p");
	$nKelas_praktikum_php = count($mat_kelas_praktikum_php ,0); 
//****************************** pegawai untuk pengawas******************************	
	$mat_pengawas_php = ambil_peg_pengawas($dbhandle,"pegawai",$kd_fak,"jab001");
	$nPengawas_php = count($mat_pengawas_php ,0); 

//****************************** pengawasujian pegawai******************************
	$mat_pengawasujian_peg_php = ambil_data_tabel($dbhandle,"pengawasPegawai");
	$nPengawasujian_peg_php = count($mat_pengawasujian_peg_php ,0); 

//****************************** pengawasujian dosen******************************
	$mat_pengawasujian_dos_php = ambil_data_tabel($dbhandle,"pengawasDosen");
	$nPengawasujian_dos_php = count($mat_pengawasujian_dos_php ,0); 
		
//****************************** LABKOM ujian******************************
	$mat_labkomujian_php = ambil_labkomujian($dbhandle,"labkomujian", "labkom" ,$kd_thn_ajaran, $kd_semester);
	$nLabkomujian_php = count($mat_labkomujian_php ,0); 		
//****************************** RUANG  ujian******************************
	$mat_ruangujian_php = ambil_ruangujian($dbhandle,"ruangujian", "ruangan" ,$kd_thn_ajaran, $kd_semester);
	$nRuangujian_php = count($mat_ruangujian_php ,0);
//echo "sampai </br>";	
//****************************** slotisi ******************************
	
	//$mat_slotisi_php = ambil_data_slotisi("slotisi",$kd_thn_ajaran,$kd_semester ,$kd_masa_ujian);
	//$nSlotisi_php = count($mat_slotisi_php ,0);
	//$n_ket =  $mat_slotisi_php[$nSlotisi_php-1][7];
	//if($n_ket > 4) 
	
	//delete_slotisi($dbhandle,"slotisi",$kd_thn_ajaran,$kd_semester ,$kd_masa_ujian);
 //echo "sampai </br>";
	
//close the connection
mysqli_close($dbhandle);
?>

<h1>Penjadwalan Ujian</h1>

<script type = "text/javascript"> 

	//document.write("PSO Scheduling -- javascript");
	document.write("<br />");
	var matPegawai = JSON.parse( '<?php echo json_encode($mat_pegawai_php) ?>' );
	var matMatakuliah = JSON.parse( '<?php echo json_encode($mat_matakuliah_php) ?>' ); 
	var matTahunajaran = ( '<?php echo json_encode($mat_tahunajaran_php) ?>' );	  	
	var matSemester = ( '<?php echo json_encode($mat_semester_php) ?>' ); 	
	var matFakultas = ( '<?php echo json_encode($mat_fakultas_php) ?>' ); 	
	var matJabatan = JSON.parse('<?php echo json_encode($mat_jabatan_php)?>' ); 	
	var matKelas = JSON.parse('<?php echo json_encode($mat_kelas_php) ?>');	
	var matProdi = JSON.parse('<?php echo json_encode($mat_prodi_php)?>' );	 
	var matDetailajar = JSON.parse( '<?php echo json_encode($mat_detailajar_php) ?>' );		
	var matDetailkelas = JSON.parse( '<?php echo json_encode($mat_detailkelas_php) ?>' );	 
	var matPembagiankelas = JSON.parse( '<?php echo json_encode($mat_pembagiankelas_php) ?>' );
	var matHari = JSON.parse( '<?php echo json_encode($mat_hari_php) ?>' );		
	var matJam = JSON.parse( '<?php echo json_encode($mat_jam_php) ?>' );
	var matRuangTeori = JSON.parse( '<?php echo json_encode($mat_ruang_php) ?>' );
	var matRuangUjian = JSON.parse( '<?php echo json_encode($mat_ruangujian_php) ?>' );
	document.write("matRuangUjian : <br />");
	OperasiMatriks.tampilMatriksString(matRuangUjian);
	document.write("<br />");
	
	var matLabkom = JSON.parse( '<?php echo json_encode($mat_labkom_php) ?>' );
	var matLabkomUjian = JSON.parse( '<?php echo json_encode($mat_labkomujian_php) ?>' );
	document.write("matLabkomUjian : <br />");
	OperasiMatriks.tampilMatriksString(matLabkomUjian);
	document.write("<br />");
	
	var matHariUjian = JSON.parse( '<?php echo json_encode($mat_hari_ujian_php) ?>' );
	document.write("matHariUjian : <br />");
	OperasiMatriks.tampilMatriksString(matHariUjian);
	document.write("<br />");
	
	//`KODEKELAS`,kdpecah,KODEMATKUL, semester ,NIP,JUMLAHMAHASISWA, TAHUNANGKATAN
	var mKelasTeori = JSON.parse( '<?php echo json_encode($mat_kelas_teori_php) ?>' );	
	document.write("mKelasTeori : <br />");
	OperasiMatriks.tampilMatriksString(mKelasTeori);document.write("<br />");
	
	var mKelasPraktek = JSON.parse( '<?php echo json_encode($mat_kelas_praktikum_php) ?>' );
	document.write("mKelasPraktek : <br />");
	OperasiMatriks.tampilMatriksString(mKelasPraktek);document.write("<br />");	
	
	var matPengawasPeg = JSON.parse( '<?php echo json_encode($mat_pengawasujian_peg_php) ?>' );
	document.write("matPengawasPeg : <br />");
	OperasiMatriks.tampilMatriksString(matPengawasPeg);	document.write("<br />");
	
	var matPengawasDos = JSON.parse( '<?php echo json_encode($mat_pengawasujian_dos_php) ?>' );
	document.write("matPengawasDos : <br />");
	OperasiMatriks.tampilMatriksString(matPengawasDos);
	document.write("<br />");
//###################################################################################	
	var jruang = "<?php echo $nRuang_php ?>";
	var jhari = "<?php echo $nHari_php ?>";
			
	var jruangUjian = "<?php echo $nRuangujian_php ?>";	
	var jhariujian = "<?php echo $nHari_ujian_php ?>";
	var jam = "<?php echo $nJam_php ?>";			
	
	document.write("jruangUjian,jhari,jam ==> "+jruangUjian+","+jhariujian+","+jam+"<br />");
	var nSlotTeori = jruangUjian*jhariujian*jam;
	document.write("nSlot Teori : "+nSlotTeori+"<br />");
	
	var jlabkomujian = "<?php echo $nLabkomujian_php ?>"
	document.write("jlabkomujian,jhari,jam ==> "+jlabkomujian+","+jhariujian+","+jam+"<br />");
	var nSlotPraktek = jlabkomujian*jhariujian*jam;
	document.write("nSlot Praktek : "+nSlotPraktek+"<br />");

	//var kdprodi = "<?php echo $kd_prodi ?>";
	var kdthnajaran = "<?php echo $kd_thn_ajaran ?>";
	var kdsemester = "<?php echo $kd_semester ?>";
	var kdmasaujian = "<?php echo $kd_masa_ujian ?>";		
	// kdthnajaran, kdsemester, kdmasaujian
//###################################################################################		
	var w = 0.1; //0.729; //bobotInersiaW
	var c1 = 1.1; //1.49445; // bobotKognitifC1 
	var c2 = 1.49445; //bobotSosialC2 
	var nInd = 20;
	var maxGen = 100; 
	
	var maxDosen = 3; // max dosen yang mengajar dalam satu MK	
	var maxNgajar = 3;	// max dosen yang mengajar dalam satu Hari
	var maxMK = 2; // max MK yang dilaksanakan dalam satu Hari
	
	var maxDosenUjian = 2; // max dosen yang menjaga ujian dalam satu MK
	var maxPegawaiUjian = 2; // max pegawai yang menjaga ujian dalam satu MK
	var maxJaga = 3; // max MK yang dijaga dalam satu Hari
	//var maxMhsUjian = 2; 
	var maxUjian = 2; // max MK yang diujikan untuk mahasiswa dalam satu Hari
						 // untuk angkatan/semester yang sama
					//maxUjian --> maksimum seorang mahasiswa menempuh ujian dalam satu hari
	var maxDosenUjianP = 2;
	
	var nilMax = 4; // nilai maksimum di generate velocity
	
//###################################################################################	
				
	var mkJalanTeoriUjian = PsoScheduling.buatMkJalanTeoriUjian(mKelasTeori,matPengawasPeg, matPengawasDos,maxDosen);
	document.write("mkJalanTeoriUjian : <br />");
	OperasiMatriks.tampilMatriksString(mkJalanTeoriUjian);
	document.write("<br />");
	
	var mkJalanPraktekUjian = PsoScheduling.buatMkJalanPraktekUjian(mKelasPraktek, matPengawasDos,maxDosen);
	document.write("mkJalanPraktekUjian : <br />");
	OperasiMatriks.tampilMatriksString(mkJalanPraktekUjian);
	document.write("<br />");
	
	var matSlot = PsoScheduling.buatMatSlotRHJ(jruangUjian, jhariujian,jam, matHariUjian); //
	var nTandaMin = PsoScheduling.hitTandaMinKolomMatriks(matSlot, 4);	// matHariUjian
	var matSlotP = PsoScheduling.buatMatSlotRHJ(jlabkomujian, jhariujian,jam, matHariUjian);
	var nTandaMinP = PsoScheduling.hitTandaMinKolomMatriks(matSlotP, 4);
//document.write("matSlot : <br />");
//OperasiMatriks.tampilMatriksString(matSlot);document.write("<br />");	
	var nSlotT = nSlotTeori-nTandaMin;
	var nSlotP = nSlotPraktek-nTandaMinP;
//document.write("nTandaMin : "+nTandaMin+" dan nTandaMinP : "+nTandaMinP+" <br />");
//document.write("nSlotT : "+nSlotT+" dan nSlotP : "+nSlotP+" <br />");
	
//###################################################################################
	var sama = 0;
	for(var i=0; i < maxGen ; i++){		
		if(i == 0){		
			var matPopT = PsoScheduling.generatePop(nInd,nSlotT);
			var matPopP = PsoScheduling.generatePop(nInd,nSlotP);
//document.write("matPopT : <br />");OperasiMatriks.tampilMatriks(matPopT);
//document.write("<br />");								
//document.write("matPopP : <br />");OperasiMatriks.tampilMatriks(matPopP);
//document.write("<br />");			
//document.write("matPopT.length : "+matPopT[0].length+" <br />");	
//document.write("matPopP.length : "+matPopP[0].length+" <br />");		
			var matVelocityT = PsoScheduling.generateVelocity(nInd, nSlotT, nilMax);			
			var matVelocityP = PsoScheduling.generateVelocity(nInd, nSlotP, nilMax);
//document.write("matVelocityT : <br />");OperasiMatriks.tampilMatriks(matVelocityT);
//document.write("<br />");
//document.write("matVelocityP : <br />");OperasiMatriks.tampilMatriks(matVelocityP);
//document.write("<br />");	

			var mHitMatNilLocBest = PsoScheduling.hitMatriksDanNilaiLocalBestUjian(matSlot,matSlotP,matPopT, matPopP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian,mkJalanPraktekUjian,maxDosenUjian, maxPegawaiUjian,maxJaga,maxUjian);
//document.write("mHitMatNilLocBest : <br />");
//OperasiMatriks.tampilMatriks(mHitMatNilLocBest);document.write("<br />");
			var indeksMaks = PsoScheduling.hitIndeksMinMaksBest(mHitMatNilLocBest);
			var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest,indeksMaks[1]);
			var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
var matLocBest = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBest);
var vektGlobalBest = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBest);
			var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);			
	
//document.write("vHitVekNilGlobBest : ");
//OperasiVektor.tampilVektorRiil(vHitVekNilGlobBest);document.write("<br />");	
//document.write("vNilaiLocBest==== : ");
//OperasiVektor.tampilVektorRiil(vNilaiLocBest);document.write("<br />");
//OperasiVektor.tampilVektorRiil(indeksMaks);document.write("<br />");
//document.write("nilGlobalB : "+nilGlobalB+" <br />");
		} 
			else {
				var matVelocityT = PsoScheduling.hitMatUpdateVelocity(matPopBaruT, matVelocityBaruT, w, c1, c2, matLocBestBaru ,vektGlobalBestBaru);
				var matVelocityP = PsoScheduling.hitMatUpdateVelocity(matPopBaruP, matVelocityBaruP, w, c1, c2, matLocBestBaru ,vektGlobalBestBaru);	

//matLocBestBaru ,vektGlobalBestBaru
				var matPopT = PsoScheduling.hitMatUpdatePartikel(matPopT, matVelocityT);
				var matPopP = PsoScheduling.hitMatUpdatePartikel(matPopP, matVelocityP);	
				var mHitMatNilLocBest3 = PsoScheduling.hitMatriksDanNilaiLocalBestUjian(matSlot,matSlotP,matPopT, matPopP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian,mkJalanPraktekUjian,maxDosenUjian, maxPegawaiUjian,maxJaga,maxUjian);			
//document.write("mHitMatNilLocBest3 : <br />");
//OperasiMatriks.tampilMatriks(mHitMatNilLocBest3);document.write("<br />");
				var mHitMatNilLocBest = PsoScheduling.hitMatTerbaikDariDuaMatNilLocalBest(mHitMatNilLocBestBaru , mHitMatNilLocBest3);
//document.write("mHitMatNilLocBest : <br />");
//OperasiMatriks.tampilMatriks(mHitMatNilLocBest);document.write("<br />");
				var indeksMaks = PsoScheduling.hitIndeksMinMaksBest(mHitMatNilLocBest);
				var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest, indeksMaks[1]);
				var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
var matLocBest = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBest);
var vektGlobalBest = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBest);				
				var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);	
//document.write("vNilaiLocBest==== : ");
//OperasiVektor.tampilVektorRiil(vNilaiLocBest);document.write("<br />");
//document.write("nilGlobalB : "+nilGlobalB+" <br />");			
				}
		var matVelocityBaruT = PsoScheduling.hitMatUpdateVelocity(matPopT, matVelocityT, w, c1, c2,  matLocBest, vektGlobalBest);
		var matVelocityBaruP = PsoScheduling.hitMatUpdateVelocity(matPopP, matVelocityP, w, c1, c2,  matLocBest, vektGlobalBest);	
//document.write("matVelocityBaruT : <br />");
//OperasiMatriks.tampilMatriks(matVelocityBaruT);document.write("<br />");
//document.write("matVelocityBaruP : <br />");
//OperasiMatriks.tampilMatriks(matVelocityBaruP);document.write("<br />");				
		var matPopBaruT = PsoScheduling.hitMatUpdatePartikel(matPopT, matVelocityBaruT);
		var matPopBaruP = PsoScheduling.hitMatUpdatePartikel(matPopP, matVelocityBaruP);
//document.write("matPopBaruT : <br />");OperasiMatriks.tampilMatriks(matPopBaruT);
//document.write("<br />");								
//document.write("matPopBaruP : <br />");OperasiMatriks.tampilMatriks(matPopBaruP);
//document.write("<br />");			
		var mHitMatNilLocBest2 = PsoScheduling.hitMatriksDanNilaiLocalBestUjian(matSlot,matSlotP,matPopBaruT, matPopBaruP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian,mkJalanPraktekUjian,maxDosenUjian, maxPegawaiUjian,maxJaga,maxUjian);
//document.write("mHitMatNilLocBest2 : <br />");
//OperasiMatriks.tampilMatriks(mHitMatNilLocBest2);document.write("<br />");			
		var mHitMatNilLocBestBaru = PsoScheduling.hitMatTerbaikDariDuaMatNilLocalBest(mHitMatNilLocBest , mHitMatNilLocBest2);
//document.write("mHitMatNilLocBestBaru : <br />");
//OperasiMatriks.tampilMatriks(mHitMatNilLocBestBaru);document.write("<br />");	
		var indeksMaks = PsoScheduling.hitIndeksMinMaksBest(mHitMatNilLocBestBaru);	
		var vHitVekNilGlobBestBaru = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBestBaru, indeksMaks[1]);
		var vNilaiLocBestBaru = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBestBaru);
var matLocBestBaru = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBestBaru);
var vektGlobalBestBaru = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBestBaru);			
		var nilGlobalBBaru = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBestBaru);	

//document.write("vHitVekNilGlobBestBaru : ");   
//OperasiVektor.tampilVektorRiil(vHitVekNilGlobBestBaru);document.write("<br />");	
//document.write("vNilaiLocBestBaru : ");
//OperasiVektor.tampilVektorRiil(vNilaiLocBestBaru);document.write("<br />");
//OperasiVektor.tampilVektorRiil(indeksMaks);document.write("<br />");
document.write("nilGlobalBBaru : "+nilGlobalBBaru+" <br />");	

		//var samaTemp = OperasiVektor.jumlahVektor(OperasiVektor.kurang2Vektor(vNilaiLocBestBaru,vNilaiLocBest));
		var banding = vNilaiLocBestBaru.length*0.75;
		var samaTemp = OperasiVektor.hitungElemenNol(OperasiVektor.kurang2Vektor(vNilaiLocBestBaru,vNilaiLocBest));
		if(samaTemp > banding) sama++; else sama=0;//if(samaTemp < 0.00001) sama++;
document.write("samaTemp : "+samaTemp+" dan banding : "+banding+" <br />");	
		
		if(sama > 4) break;	
	}

	//OperasiVektor.tampilVektorRiil(vNilaiLocBestBaru);document.write("<br />");
	//OperasiVektor.tampilVektorRiil(indeksMaks);document.write("<br />");
	//document.write("nilGlobalBBaru : "+nilGlobalBBaru+" <br />");

	//document.write("vHitVekNilGlobBestBaru : ");
	//OperasiVektor.tampilVektorRiil(vHitVekNilGlobBestBaru);document.write("<br />");
	//document.write("vHitVekNilGlobBestBaru.length : "+vHitVekNilGlobBestBaru.length+" <br />");
	
	//document.write("nSlotT+nSlotP : "+(nSlotT+nSlotP)+" <br />");	
	
	var vKodeT = PsoScheduling.ambilKodeIntBest(vHitVekNilGlobBestBaru , nSlotT, nSlotP, "k");
	//document.write("vKodeT dan length === "+vKodeT.length+" === : ");
	//OperasiVektor.tampilVektor(vKodeT);document.write("<br />");
	
	var matSlotIsi = PsoScheduling.buatMatSlotIsiRHJ(vKodeT,matSlot, "k");
	//document.write("matSlotIsi : <br />");
	//OperasiMatriks.tampilMatriksString(matSlotIsi);document.write("<br />");	

	var vKodeP = PsoScheduling.ambilKodeIntBest(vHitVekNilGlobBestBaru , nSlotT, nSlotP, "p");
	//document.write("vKodeP dan length === "+vKodeP.length+" === : ");
	//OperasiVektor.tampilVektor(vKodeP);document.write("<br />");
	
	var matSlotIsiP = PsoScheduling.buatMatSlotIsiRHJ(vKodeP,matSlotP, "p");
	//document.write("matSlotIsiP : <br />");
	//OperasiMatriks.tampilMatriksString(matSlotIsiP);document.write("<br />");

	document.write("nilGlobalBest : "+nilGlobalBBaru+" <br />");

//###############################################################################	
//			============   UJIAN GABUNGAN -- Teori dan Praktek   ==============
//###############################################################################
   	
	//document.write("############################################################<br />");
	document.write("################## hitPinaltiRuang Teori dan Praktek ################## <br />");
    var mPinaltiRuangGabung = PsoScheduling.hitPinaltiRuangUjianGabung(matSlotIsi, matSlotIsiP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian, mkJalanPraktekUjian);			
	//document.write("mPinaltiRuangGabung : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiRuangGabung);
	//document.write("<br />");	
	
	var nilPinaltiRGabung = mPinaltiRuangGabung[1][mPinaltiRuangGabung[0].length - 1];
	document.write("nilPinaltiR : "+ nilPinaltiRGabung +"<br />");
	
	var mPinaltiRuangGabungHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiRuangGabung);
	document.write("mPinaltiRuangGabungHas : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiRuangGabungHas); document.write("<br>");

//############################ Teori dan Praktek ################################
// 
// (matSlotIsi,matSlotIsiP, mMkUjian,mMkUjianPraktek, maxDosen)
	document.write("################## hitPinaltiDosen ################## <br />");
    var mPinaltiDosenGabung = PsoScheduling.hitPinaltiDosenUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,maxDosenUjian);	
	//document.write("mPinaltiDosenGabung : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiDosenGabung);
	//document.write("<br />");	
	
	var nilPinaltiDGabung = mPinaltiDosenGabung[0][mPinaltiDosenGabung[0].length - 1];
	document.write("nilPinaltiD : "+ nilPinaltiDGabung +"<br />");
	
	var mPinaltiDosenGabungHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiDosenGabung);
	document.write("mPinaltiDosenGabung : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiDosenGabungHas); //document.write("<br />");	

//############################ Teori dan Praktek ################################
	document.write("################## hitPinaltiPegawai ################## <br />");
    var mPinaltiPegawai = PsoScheduling.hitPinaltiPegawaiUjian(matSlotIsi, mkJalanTeoriUjian, maxPegawaiUjian);	
	//document.write("mPinaltiPegawai : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiPegawai);
	//document.write("<br />");	
	
	var nilPinaltiPeg = mPinaltiPegawai[0][mPinaltiPegawai[0].length - 1];
	document.write("nilPinaltiPeg : "+ nilPinaltiPeg +"<br />");
	
	var mPinaltiPegawaiHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiPegawai);
	document.write("mPinaltiPegawai : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiPegawaiHas); //document.write("<br />");	

//############################ Teori dan Praktek ################################

    document.write("################## hitPinaltiDosen max Jaga Ujian################## <br />");
    var mPinaltiDosenMaxUjianGabung = PsoScheduling.hitPinaltiDosenMaxUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,maxDosenUjian, maxJaga);	
	//document.write("mPinaltiDosenMaxUjianGabung : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiDosenMaxUjianGabung);
	//document.write("<br />");	
	
	var nilPinaltiDMaxUjianGabung = mPinaltiDosenMaxUjianGabung[0][mPinaltiDosenMaxUjianGabung[0].length - 1];
	document.write("nilPinaltiDMax : "+ nilPinaltiDMaxUjianGabung +"<br />");
	
	var mPinaltiDosenHasMaxUjianGabung = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiDosenMaxUjianGabung);
	document.write("mPinaltiDosenMaxUjian : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiDosenHasMaxUjianGabung); document.write("<br />");
	
//############################ Teori dan Praktek ################################

	document.write("################## hitPinaltiMahasiswa################## <br />");		 
    var mPinaltiMhsUjianGabung = PsoScheduling.hitPinaltiMhsUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,maxUjian);	
	//document.write("mPinaltiMhsUjianGabung : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiMhsUjianGabung);
	//document.write("<br />");	
	
	var nilPinaltiMUjianGabung = mPinaltiMhsUjianGabung[0][mPinaltiMhsUjianGabung[0].length - 1];
	document.write("nilPinaltiM : "+ nilPinaltiMUjianGabung +"<br />");
	
	var mPinaltiMhsHasUjianGabung = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiMhsUjianGabung);
	document.write("mPinaltiMhsUjian : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiMhsHasUjianGabung); document.write("<br />");

//############################ Teori dan Praktek ################################
	
	document.write("################## hitPinaltiMahasiswa Max################## <br />");		 
    var mPinaltiMhsMaxUjianGabung = PsoScheduling.hitPinaltiMhsMaxUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian,mkJalanPraktekUjian,maxUjian );	
	//document.write("mPinaltiMhsMaxUjianGabung : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiMhsMaxUjianGabung);
	//document.write("<br />");	
	
	var nilPinaltiMMaxUjianGabung = mPinaltiMhsMaxUjianGabung[0][mPinaltiMhsMaxUjianGabung[0].length - 1];
	document.write("nilPinaltiMMaxGabung : "+ nilPinaltiMMaxUjianGabung +"<br />");
	
	var mPinaltiMhsHasMaxUjianGabung = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiMhsMaxUjianGabung);
	document.write("mPinaltiMhsMaxUjian : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiMhsHasMaxUjianGabung); document.write("<br />");
	
	
	var nilFitBest = 1/(1+ nilPinaltiRGabung + nilPinaltiDGabung + nilPinaltiPeg + nilPinaltiDMaxUjianGabung + nilPinaltiMUjianGabung +nilPinaltiMMaxUjianGabung);	
	document.write("nilFitBest : "+nilFitBest+" <br />");

    document.write("=======================================================<br />");
	var matSlotFinal = PsoScheduling.buatMatSlotFinal(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,nilFitBest,kdthnajaran, kdsemester, kdmasaujian);
	document.write("matSlotFinal : <br />");
	OperasiMatriks.tampilMatriksString(matSlotFinal);document.write("<br />");
	document.write("=======================================================<br />");	
	//
	// data yang ada di matSlotFinal --> di-eksport ke table slotisi
	//
	
	
//*		

	//document.write("<br />");
	// ################################################################
	// 					tranfer data js to php
	// ################################################################
	var php_data = "("+arrJsToPhp(matSlotFinal)+")";
		// ################################################################
	// 					tranfer data js to php
	// ################################################################
	$.ajax({
		type: 'POST',
		url: 'include/1_process_data_in_php.php',  
		data: {'categories': php_data},	
	
		// the success method has different order of parameters          
		success: function(data, status, xhr) {
			alert("response was "+data);
		},
		error: function(xhr, status, errorMessage) {
			$("#debug").append("RESPONSE: "+xhr.responseText+", error: "+errorMessage);
		}		
  });	
	//*/
	
	</script>


	<script type = "text/javascript"> 	
	document.write("<br />");
	document.write("proses tranfer data js to php selesai <br />");	
		
	</script>


</body>


</html>