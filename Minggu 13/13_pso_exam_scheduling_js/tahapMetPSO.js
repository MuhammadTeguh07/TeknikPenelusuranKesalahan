<script type = "text/javascript"> 	
	
	var nSlot, vInd, matRuang, matMkJalan, maxDosen, jruang, jhari, jam;
	var w = 0.729; //bobotInersiaW
	var c1 = 1.49445; // bobotKognitifC1 
	var c2 = 1.49445; //bobotSosialC2 
	var maxGen = 3;

	for(var i=0; i<maxGen ; i++){
		
		if(i == 0){
			var mPop = PsoScheduling.generatePop(nInd,nSlot);	
			var matVelocity = PsoScheduling.generateVelocity(nInd, nSlot);
			var mHitMatNilLocBest = PsoScheduling.hitMatriksDanNilaiLocalBest(mPop, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);	
			var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest);
			var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
			var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);			
		} else {
			var matVelocity = PsoScheduling.hitMatUpdateVelocity(matPopBaru, matVelocityBaru, w, c1, c2, vNilaiLocBestBaru, nilGlobalBBaru);	
			var mPop = PsoScheduling.hitMatUpdatePartikel(matPopBaru, matVelocityBaru, w, c1, c2, vNilaiLocBestBaru, nilGlobalBBaru);
			var mHitMatNilLocBest3 = PsoScheduling.hitMatriksDanNilaiLocalBest(mPopBaru, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);			
			var mHitMatNilLocBest = PsoScheduling.hitMatTerbaikDariDuaMatNilLocalBest(mHitMatNilLocBest3 , mHitMatNilLocBest2);
			var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest);
			var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
			var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);
			}
		var matVelocityBaru = PsoScheduling.hitMatUpdateVelocity(matPop, matVelocity, w, c1, c2, vNilaiLocBest, nilGlobalB);	
		var mPopBaru = PsoScheduling.hitMatUpdatePartikel(matPop, matVelocityBaru, w, c1, c2, vNilaiLocBest, nilGlobalB);
		var mHitMatNilLocBest2 = PsoScheduling.hitMatriksDanNilaiLocalBest(mPopBaru, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);
		var mHitMatNilLocBestBaru = PsoScheduling.hitMatTerbaikDariDuaMatNilLocalBest(mHitMatNilLocBest , mHitMatNilLocBest2);			
		var vHitVekNilGlobBestBaru = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBestBaru);
		var vNilaiLocBestBaru = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBestBaru);
		var nilGlobalBBaru = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBestBaru);		
	}


	
	
	
	var vIndRiil = PsoScheduling.generateIndRiil(nSlot);
	document.write("generateIndRiil : ");OperasiVektor.tampilVektorRiil(vIndRiil);
	document.write("<br />");
	
	var vInd = PsoScheduling.ubahEncodingRiilKeBulat(vIndRiil);
	document.write("ubah ke Ind bulat : ");OperasiVektor.tampilVektor(vInd);
	document.write("<br />");

//###################################################################################
	document.write("################## hitTampungRuang ################## <br />");
	/*
	var arrayRHJ = PsoScheduling.matRuangHariJam(vInd ,jruang, jhari, jam);
	document.write("array RuangHariJam : <br />");
	PsoScheduling.showMatRuangHariJam(arrayRHJ ,jruang, jhari, jam);
	document.write("<br />");	
	//*/
	
//*		
	var vPinaltiTR = PsoScheduling.hitPinaltiTampungRuang(vInd, matRuang, matMkJalan,jruang, jhari, jam);	
	//document.write("vPinaltiTR : <br />");
	//OperasiVektor.tampilVektor(vPinaltiTR);
	//document.write("<br />");	
	
	var nilPinaltiTR = vPinaltiTR[vPinaltiTR.length - 1];
	document.write("nilPinaltiTR : "+ nilPinaltiTR +"<br />");
	
	vPinaltiTR.pop();
	document.write("vPinaltiTR : ");
	OperasiVektor.tampilVektor(vPinaltiTR);	document.write("<br />");
//*/
//###################################################################################
	document.write("################## hitPinaltiDosen ################## <br />");
	/*
	var arrayHJR = PsoScheduling.matHariJamRuang(vInd ,jruang, jhari, jam);
	document.write("array HariJamRuang : <br />");
	PsoScheduling.showMatHariJamRuang(arrayHJR ,jruang, jhari, jam);
	document.write("<br />");	
	//*/
	
	 
    var mPinaltiDosen = PsoScheduling.hitPinaltiDosen(vInd, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);	
	//document.write("mPinaltiDosen : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiDosen);
	//document.write("<br />");	
	
	var nilPinaltiD = mPinaltiDosen[0][mPinaltiDosen[0].length - 1];
	document.write("nilPinaltiD : "+ nilPinaltiD +"<br />");
	
	var mPinaltiDosenHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiDosen);
	document.write("mPinaltiDosen : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiDosenHas); document.write("<br />");

//###################################################################################	
	document.write("################## hitPinaltiMahasiswa ################## <br />");		 
    var mPinaltiMhs = PsoScheduling.hitPinaltiMahasiswa(vInd,matRuang,matMkJalan,jruang,jhari,jam);	
	//document.write("mPinaltiMhs : <br />");
	//OperasiMatriks.tampilMatriksString(mPinaltiMhs);
	//document.write("<br />");	
	
	var nilPinaltiM = mPinaltiMhs[0][mPinaltiMhs[0].length - 1];
	document.write("nilPinaltiM : "+ nilPinaltiM +"<br />");
	
	var mPinaltiMhsHas = OperasiMatriks.hilangKolomAkhirMatriks(mPinaltiMhs);
	document.write("mPinaltiMhs : <br />");
	OperasiMatriks.tampilMatriksString(mPinaltiMhsHas); document.write("<br />");
	
//###################################################################################	
	document.write("################## hitung fitness ################## <br />");	
	var nilF = PsoScheduling.hitFitness(vInd, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);
	document.write("hitFitness : "+ nilF +"<br />");
		
//###################################################################################	
	document.write("################## populasi ################## <br />");		
	var mPop = PsoScheduling.generatePop(nInd,nSlot);
	//document.write("mPop : <br />");OperasiMatriks.tampilMatriks(mPop);
	//document.write("<br />");
	
	//var mPopBulat = PsoScheduling.ubahPopKeBulat(mPop);
	//document.write("mPopBulat : <br />");OperasiMatriks.tampilMatriksString(mPopBulat);
	//document.write("<br />");
	
//###################################################################################	
	document.write("################## hitMatriksDanNilaiLocalBest ################## <br />");		
	var mHitMatNilLocBest = PsoScheduling.hitMatriksDanNilaiLocalBest(mPop, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);
	document.write("mHitMatNilLocBest : <br />");OperasiMatriks.tampilMatriks(mHitMatNilLocBest);
	document.write("<br />");	
	/*
	var matLocBest = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBest);
	document.write("matLocBest : <br />");OperasiMatriks.tampilMatriks(matLocBest);
	document.write("<br />");
	
	var vNilaiLocBest = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest);
	document.write("vNilaiLocBest : ");OperasiVektor.tampilVektor(vNilaiLocBest);document.write("<br />");
	
	document.write("################## hit Vektor Dan Nilai Global Best ################## <br />");	
	var vHitVekNilGlobBest = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest);
	document.write("vHitVekNilGlobBest : ");OperasiVektor.tampilVektor(vHitVekNilGlobBest);document.write("<br />");
	
	var vGlobalB = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBest);
	document.write("vGlobalB : ");OperasiVektor.tampilVektor(vGlobalB);document.write("<br />");
	
	var nilGlobalB = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest);
	document.write("nilGlobalB : "+ nilGlobalB +"<br />");
    //*/
//###################################################################################	
	document.write("################## populasi ################## <br />");		
	var mPop2 = PsoScheduling.generatePop(nInd,nSlot);
	//document.write("mPop2 : <br />");OperasiMatriks.tampilMatriks(mPop2);
	//document.write("<br />");
	
	//var mPopBulat = PsoScheduling.ubahPopKeBulat(mPop);
	//document.write("mPopBulat : <br />");OperasiMatriks.tampilMatriksString(mPopBulat);
	//document.write("<br />");
	
//###################################################################################	
	document.write("################## hitMatriksDanNilaiLocalBest ################## <br />");		
	var mHitMatNilLocBest2 = PsoScheduling.hitMatriksDanNilaiLocalBest(mPop2, matRuang, matMkJalan, maxDosen, jruang, jhari, jam);
	document.write("mHitMatNilLocBest2 : <br />");OperasiMatriks.tampilMatriks(mHitMatNilLocBest2);
	document.write("<br />");	
	
	/*
	var matLocBest2 = PsoScheduling.hitMatriksLocalBest(mHitMatNilLocBest2);
	document.write("matLocBest2 : <br />");OperasiMatriks.tampilMatriks(matLocBest2);
	document.write("<br />");
	
	var vNilaiLocBest2 = PsoScheduling.hitVektorNilaiLocalBest(mHitMatNilLocBest2);
	document.write("vNilaiLocBest2 : ");OperasiVektor.tampilVektor(vNilaiLocBest2);document.write("<br />");
	
	document.write("################## hit Vektor Dan Nilai Global Best ################## <br />");	
	var vHitVekNilGlobBest2 = PsoScheduling.hitVektorDanNilaiGlobalBest(mHitMatNilLocBest2);
	document.write("vHitVekNilGlobBest2 : ");OperasiVektor.tampilVektor(vHitVekNilGlobBest2);document.write("<br />");
	
	var vGlobalB2 = PsoScheduling.hitVektorGlobalBest(vHitVekNilGlobBest2);
	document.write("vGlobalB2 : ");OperasiVektor.tampilVektor(vGlobalB2);document.write("<br />");
	
	var nilGlobalB2 = PsoScheduling.hitNilaiGlobalBest(vHitVekNilGlobBest2);
	document.write("nilGlobalB2 : "+ nilGlobalB2 +"<br />");	
	//*/
	
//###################################################################################	
	document.write("################## banding MatriksDanNilaiLocalBest ################## <br />");		
	var mBanding = PsoScheduling.hitMatTerbaikDariDuaMatLocalBest(mHitMatNilLocBest , mHitMatNilLocBest2);
	document.write("mBanding : <br />");OperasiMatriks.tampilMatriks(mBanding);
	document.write("<br />");
//###################################################################################	
	var w = 0.729; //bobotInersiaW
	var c1 = 1.49445; // bobotKognitifC1 
	var c2 = 1.49445; //bobotSosialC2 
//###################################################################################

	var mVelocity = PsoScheduling.generateVelocity(nInd, nSlot);
	document.write("mVelocity : <br />");OperasiMatriks.tampilMatriks(mVelocity);
	document.write("<br />");
	
</script>