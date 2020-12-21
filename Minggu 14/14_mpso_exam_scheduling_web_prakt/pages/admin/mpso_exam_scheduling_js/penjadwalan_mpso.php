<?php
include("include/koneksi.php");
include("include/matriks.php"); 
include("include/array_2dim.php");
?>


<!docfile html>
<head>

<script type = "text/javascript" src="include/PsoScheduling.js"> </script>
<script type = "text/javascript" src="include/jquery-3.2.1.min.js"></script>
<script type = "text/javascript" src="include/konversiArrayString.js"> </script>

</head> 

<body>
	
<h1> </h1>

<?php
	$bacajadwal = mysqli_query($dbhandle,"SELECT * FROM penjadwalan WHERE KODEJADWAL='$_GET[KODEJADWAL]' AND statuspakai='$_GET[statuspakai]'");
	$row = mysqli_fetch_row($bacajadwal);  
	$kd_fak = $row[3];
 	$kd_prodi = $row[4];
 	$kd_semester = $row[5];
	$kd_thn_ajaran = $row[6];
	$kd_masa_ujian = $row[7]; // 0 => uts  dan 1 => uas
	
//****************************** RUANG ******************************
	$mat_ruang_php = ambil_data_tabel($dbhandle,"ruangan");
	$nRuang_php = count($mat_ruang_php,0); 
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

	
	delete_slotisi($dbhandle,"slotisi", $kd_thn_ajaran, $kd_semester ,$kd_masa_ujian);
	mysqli_close($dbhandle);
?>

<script type = "text/javascript"> 

	//document.write("PSO Scheduling -- javascript");
	var matPegawai = JSON.parse( '<?php echo json_encode($mat_pegawai_php) ?>' );
	var matMatakuliah = JSON.parse( '<?php echo json_encode($mat_matakuliah_php) ?>' ); 
	var matTahunajaran = ( '<?php echo json_encode($mat_tahunajaran_php) ?>' );	  	
	var matSemester = ( '<?php echo json_encode($mat_semester_php) ?>' ); 	
	var matFakultas = ( '<?php echo json_encode($mat_fakultas_php) ?>' ); 	
	var matJabatan = JSON.parse( '<?php echo json_encode($mat_jabatan_php) ?>' );	
	var matKelas = JSON.parse( '<?php echo json_encode($mat_kelas_php) ?>' );	
	var matProdi = JSON.parse( '<?php echo json_encode($mat_prodi_php) ?>' );
	console.log(matSemester);
	document.write("<br />");
	//Menambahkan tutup dan buka php di line 144,145,146	 
	var matDetailajar = JSON.parse( '<?php echo json_encode($mat_detailajar_php) ?>' );		
	var matDetailkelas = JSON.parse( '<?php echo json_encode($mat_detailkelas_php) ?>' );	 
	var matPembagiankelas = JSON.parse( '<?php echo json_encode($mat_pembagiankelas_php) ?>' );
	var matHari = JSON.parse( '<?php echo json_encode($mat_hari_php) ?>' );		
	var matJam = JSON.parse( '<?php echo json_encode($mat_jam_php) ?>' );
	var matRuangTeori = JSON.parse( '<?php echo json_encode($mat_ruang_php) ?>' );
	var matRuangUjian = JSON.parse( '<?php echo json_encode($mat_ruangujian_php) ?>' );
	OperasiMatriks.tampilMatriksString(matRuangUjian);
	
	var matLabkom = JSON.parse( '<?php echo json_encode($mat_labkom_php) ?>' );
	var matLabkomUjian = JSON.parse( '<?php echo json_encode($mat_labkomujian_php) ?>' );
	OperasiMatriks.tampilMatriksString(matLabkomUjian);
	
	var matHariUjian = JSON.parse( '<?php echo json_encode($mat_hari_ujian_php) ?>' );
	OperasiMatriks.tampilMatriksString(matHariUjian);
	
	//`KODEKELAS`,kdpecah,KODEMATKUL, semester ,NIP,JUMLAHMAHASISWA, TAHUNANGKATAN
	var mKelasTeori = JSON.parse( '<?php echo json_encode($mat_kelas_teori_php) ?>' );
	OperasiMatriks.tampilMatriksString(mKelasTeori);document.write("<br />");
	
	var mKelasPraktek = JSON.parse( '<?php echo json_encode($mat_kelas_praktikum_php) ?>' );
	OperasiMatriks.tampilMatriksString(mKelasPraktek);document.write("<br />");	
	
	var matPengawasPeg = JSON.parse( '<?php echo json_encode($mat_pengawasujian_peg_php) ?>' );
	OperasiMatriks.tampilMatriksString(matPengawasPeg);	document.write("<br />");
	
	var matPengawasDos = JSON.parse( '<?php echo json_encode($mat_pengawasujian_dos_php) ?>' );
	OperasiMatriks.tampilMatriksString(matPengawasDos);
//###################################################################################	
	var jruang = "<?php echo $nRuang_php ?>";
	var jhari = "<?php echo $nHari_php ?>";
			
	var jruangUjian = "<?php echo $nRuangujian_php ?>";	
	var jhariujian = "<?php echo $nHari_ujian_php ?>";
	var jam = "<?php echo $nJam_php ?>";			
	var nSlotTeori = jruangUjian*jhariujian*jam;
	
	var jlabkomujian = "<?php echo $nLabkomujian_php ?>"
	var nSlotPraktek = jlabkomujian*jhariujian*jam;

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
	OperasiMatriks.tampilMatriksString(mkJalanTeoriUjian);
	
	var mkJalanPraktekUjian = PsoScheduling.buatMkJalanPraktekUjian(mKelasPraktek, matPengawasDos,maxDosen);
	OperasiMatriks.tampilMatriksString(mkJalanPraktekUjian);
	
	var matSlot = PsoScheduling.buatMatSlotRHJ(jruangUjian, jhariujian,jam, matHariUjian); //
	var nTandaMin = PsoScheduling.hitTandaMinKolomMatriks(matSlot, 4);	// matHariUjian
	var matSlotP = PsoScheduling.buatMatSlotRHJ(jlabkomujian, jhariujian,jam, matHariUjian);
	var nTandaMinP = PsoScheduling.hitTandaMinKolomMatriks(matSlotP, 4);
	var nSlotT = nSlotTeori-nTandaMin;
	var nSlotP = nSlotPraktek-nTandaMinP;
	var sama = 0;
	for(var i=0; i < maxGen ; i++){		
		if(i == 0){		
			var matPopT = PsoScheduling.generatePop(nInd,nSlotT);
			var matPopP = PsoScheduling.generatePop(nInd,nSlotP);	
			var matVelocityT = PsoScheduling.generateVelocity(nInd, nSlotT, nilMax);			
			var matVelocityP = PsoScheduling.generateVelocity(nInd, nSlotP, nilMax);
			var mHitMatNilLocBest = PsoScheduling.hitMatriksDanNilaiLocalBestUjian(matSlot,matSlotP,matPopT, matPopP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian,mkJalanPraktekUjian,maxDosenUjian, maxPegawaiUjian,maxJaga,maxUjian);
			var indeksMaks = PsoScheduling.hitIndeksMinMaksBest(mHitMatNilLocBest);
			var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest,indeksMaks[1]);
			var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
			var matLocBest = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBest);
			var vektGlobalBest = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBest);
			var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);			

		} 
		else {
			var matVelocityT = PsoScheduling.hitMatUpdateVelocity(matPopBaruT, matVelocityBaruT, w, c1, c2, matLocBestBaru ,vektGlobalBestBaru);
			var matVelocityP = PsoScheduling.hitMatUpdateVelocity(matPopBaruP, matVelocityBaruP, w, c1, c2, matLocBestBaru ,vektGlobalBestBaru);	
			var matPopT = PsoScheduling.hitMatUpdatePartikel(matPopT, matVelocityT);
			var matPopP = PsoScheduling.hitMatUpdatePartikel(matPopP, matVelocityP);	
			var mHitMatNilLocBest3 = PsoScheduling.hitMatriksDanNilaiLocalBestUjian(matSlot,matSlotP,matPopT, matPopP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian,mkJalanPraktekUjian,maxDosenUjian, maxPegawaiUjian,maxJaga,maxUjian);			

			var mHitMatNilLocBest = PsoScheduling.hitMatTerbaikDariDuaMatNilLocalBest(mHitMatNilLocBestBaru , mHitMatNilLocBest3);

			var indeksMaks = PsoScheduling.hitIndeksMinMaksBest(mHitMatNilLocBest);
			var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest, indeksMaks[1]);
			var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
			var matLocBest = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBest);
			var vektGlobalBest = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBest);				
			var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);		
		}
		var matVelocityBaruT = PsoScheduling.hitMatUpdateVelocity(matPopT, matVelocityT, w, c1, c2,  matLocBest, vektGlobalBest);
		var matVelocityBaruP = PsoScheduling.hitMatUpdateVelocity(matPopP, matVelocityP, w, c1, c2,  matLocBest, vektGlobalBest);			
		var matPopBaruT = PsoScheduling.hitMatUpdatePartikel(matPopT, matVelocityBaruT);
		var matPopBaruP = PsoScheduling.hitMatUpdatePartikel(matPopP, matVelocityBaruP);		
		var mHitMatNilLocBest2 = PsoScheduling.hitMatriksDanNilaiLocalBestUjian(matSlot,matSlotP,matPopBaruT, matPopBaruP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian,mkJalanPraktekUjian,maxDosenUjian, maxPegawaiUjian,maxJaga,maxUjian);			
		var mHitMatNilLocBestBaru = PsoScheduling.hitMatTerbaikDariDuaMatNilLocalBest(mHitMatNilLocBest , mHitMatNilLocBest2);
		var indeksMaks = PsoScheduling.hitIndeksMinMaksBest(mHitMatNilLocBestBaru);	
		var vHitVekNilGlobBestBaru = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBestBaru, indeksMaks[1]);
		var vNilaiLocBestBaru = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBestBaru);
var matLocBestBaru = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBestBaru);
var vektGlobalBestBaru = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBestBaru);			
		var nilGlobalBBaru = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBestBaru);		
		var banding = vNilaiLocBestBaru.length*0.75;
		var samaTemp = OperasiVektor.hitungElemenNol(OperasiVektor.kurang2Vektor(vNilaiLocBestBaru,vNilaiLocBest));
		if(samaTemp > banding) sama++; else sama=0;
		if(sama > 4) break;	
	}

	
	var vKodeT = PsoScheduling.ambilKodeIntBest(vHitVekNilGlobBestBaru , nSlotT, nSlotP, "k");

	
	var matSlotIsi = PsoScheduling.buatMatSlotIsiRHJ(vKodeT,matSlot, "k");


	var vKodeP = PsoScheduling.ambilKodeIntBest(vHitVekNilGlobBestBaru , nSlotT, nSlotP, "p");

	
	var matSlotIsiP = PsoScheduling.buatMatSlotIsiRHJ(vKodeP,matSlotP, "p");

    var mPinaltiRuangGabung = PsoScheduling.hitPinaltiRuangUjianGabung(matSlotIsi, matSlotIsiP,matRuangUjian, matLabkomUjian,mkJalanTeoriUjian, mkJalanPraktekUjian);			

	
	var nilPinaltiRGabung = mPinaltiRuangGabung[1][mPinaltiRuangGabung[0].length - 1];
	
	var mPinaltiRuangGabungHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiRuangGabung);
	OperasiMatriks.tampilMatriksString(mPinaltiRuangGabungHas); document.write("<br>");

    var mPinaltiDosenGabung = PsoScheduling.hitPinaltiDosenUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,maxDosenUjian);	

	
	var nilPinaltiDGabung = mPinaltiDosenGabung[0][mPinaltiDosenGabung[0].length - 1];
	
	var mPinaltiDosenGabungHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiDosenGabung);
	OperasiMatriks.tampilMatriksString(mPinaltiDosenGabungHas); //document.write("<br />");	

//############################ Teori dan Praktek ################################
    var mPinaltiPegawai = PsoScheduling.hitPinaltiPegawaiUjian(matSlotIsi, mkJalanTeoriUjian, maxPegawaiUjian);	
	//document.write("mPinaltiPegawai : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiPegawai);
	//document.write("<br />");	
	
	var nilPinaltiPeg = mPinaltiPegawai[0][mPinaltiPegawai[0].length - 1];
	
	var mPinaltiPegawaiHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiPegawai);
	OperasiMatriks.tampilMatriksString(mPinaltiPegawaiHas); //document.write("<br />");	

//############################ Teori dan Praktek ################################
    var mPinaltiDosenMaxUjianGabung = PsoScheduling.hitPinaltiDosenMaxUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,maxDosenUjian, maxJaga);	
	//document.write("mPinaltiDosenMaxUjianGabung : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiDosenMaxUjianGabung);
	//document.write("<br />");	
	
	var nilPinaltiDMaxUjianGabung = mPinaltiDosenMaxUjianGabung[0][mPinaltiDosenMaxUjianGabung[0].length - 1];
	
	var mPinaltiDosenHasMaxUjianGabung = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiDosenMaxUjianGabung);
	OperasiMatriks.tampilMatriksString(mPinaltiDosenHasMaxUjianGabung); document.write("<br />");
	
//############################ Teori dan Praktek ################################		 
    var mPinaltiMhsUjianGabung = PsoScheduling.hitPinaltiMhsUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,maxUjian);	
	
	var nilPinaltiMUjianGabung = mPinaltiMhsUjianGabung[0][mPinaltiMhsUjianGabung[0].length - 1];
	var mPinaltiMhsHasUjianGabung = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiMhsUjianGabung);
	OperasiMatriks.tampilMatriksString(mPinaltiMhsHasUjianGabung); document.write("<br />");

//############################ Teori dan Praktek ################################
			 
    var mPinaltiMhsMaxUjianGabung = PsoScheduling.hitPinaltiMhsMaxUjianGabung(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian,mkJalanPraktekUjian,maxUjian );
	
	var nilPinaltiMMaxUjianGabung = mPinaltiMhsMaxUjianGabung[0][mPinaltiMhsMaxUjianGabung[0].length - 1];
	var mPinaltiMhsHasMaxUjianGabung = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiMhsMaxUjianGabung);
	OperasiMatriks.tampilMatriksString(mPinaltiMhsHasMaxUjianGabung); document.write("<br />");
	
	var nilFitBest = 1/(1+ nilPinaltiRGabung + nilPinaltiDGabung + nilPinaltiPeg + nilPinaltiDMaxUjianGabung + nilPinaltiMUjianGabung +nilPinaltiMMaxUjianGabung);	
	var matSlotFinal = PsoScheduling.buatMatSlotFinal(matSlotIsi,matSlotIsiP, mkJalanTeoriUjian, mkJalanPraktekUjian,nilFitBest,kdthnajaran, kdsemester, kdmasaujian);
	OperasiMatriks.tampilMatriksString(matSlotFinal);	

	var php_data = "("+arrJsToPhp(matSlotFinal)+")";
	var kodejadwal = "<?php echo $_GET['KODEJADWAL']; ?>";
	
	$.ajax({
			type: 'POST',
			url: '1_process_data_in_php.php',  
			data: {'categories': php_data,'KODEJADWAL' : kodejadwal},	
		
			// the success method has different order of parameters          
			success: function(data, status, xhr) {
				alert("Sukses!");
				window.location.href="indexPenjadwalan.php";
			},
			error: function(xhr, status, errorMessage) {
				$("#debug").append("RESPONSE: "+xhr.responseText+", error: "+errorMessage);
			}		
	  });
	
	</script>
</body>
</html>