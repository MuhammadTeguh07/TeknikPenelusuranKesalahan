

<!docfile html>
<head>

<script type = "text/javascript" src="include/matriks_vektor.js"> </script>
 
</head>

<body>
	
<h1>PHP connect to MySQL</h1>


<h1>javascript operasi matriks dan Vektor</h1>


<script>

	document.write("<br />");
	var jruang = 3;
	var jhari = 2;
	var jam = 3;
	var nGen = jruang*jhari*jam;
	var nPop = 5;
	document.write("jruang,jhari,jam ==> "+jruang+","+jhari+","+jam+"<br />");
	
	var m1 = OperasiMatriks.generatePop(nPop,nGen);
	var m2 = OperasiMatriks.generatePop(nPop,nGen);
	document.write("mat generatePop (1) : <br />");
	OperasiMatriks.tampilMatriks(m1);
	document.write("<br/>");
	//document.write(m2[0][0] + " <br />");

	document.write("Mat 1 : <br />");
	var m3 = OperasiMatriks.ubahPopKeBulat(m1);
	OperasiMatriks.tampilMatriks(m3);
	document.write("<br/>");
	//document.write(m3[0][0]+"<br />");

	document.write("Mat 2 : <br />");
	var m4 = OperasiMatriks.ubahPopKeBulat(m2);
	OperasiMatriks.tampilMatriks(m4);
	document.write("<br/>");

	document.write("Jumlah 2 Matriks : <br />");
	var m5 = OperasiMatriks.jumlah2Matriks(m3,m4);
	OperasiMatriks.tampilMatriks(m5);
	document.write("<br/>");

	document.write("Kurang 2 Matriks : <br />");
	var m6 = OperasiMatriks.kurang2Matriks(m3,m4);
	OperasiMatriks.tampilMatriks(m6);
	document.write("<br/>");

	document.write("Operator Dot Matriks (Perkalian) : <br />");
	var m10 = OperasiMatriks.operatorDotMatriks(m3,m4);
	OperasiMatriks.tampilMatriks(m10);
	document.write("<br/>");

	document.write("Kuadrat Matriks(1) : <br />");
	var m11 = OperasiMatriks.kuadratMatriks(m3);
	OperasiMatriks.tampilMatriks(m11);
	document.write("<br/>");

	document.write("Jumlah Matriks(1) : <br />");
	var m12 = OperasiMatriks.jumlahMatriks(m3);
	document.write(m12+"<br/>");
	document.write("<br/>");

	document.write("Hitung Mean(1) : <br />");
	var m13 = OperasiMatriks.hitungMean(m3);
	document.write(m13+"<br/>");
	document.write("<br/>");

	document.write("Matriks(1) Kali Skalar(2) : <br />");
	var m7 = OperasiMatriks.kaliSkalar(m3,2);
	OperasiMatriks.tampilMatriks(m7);
	document.write("<br/>");
	
	document.write("Matriks(1) Bagi Skalar(2) : <br />");
	var m8 = OperasiMatriks.bagiSkalar(m3,2);
	OperasiMatriks.tampilMatriks(m8);
	document.write("<br/>");

	document.write("Matriks(1) Kurang Skalar(2) : <br />");
	var m9 = OperasiMatriks.kurangSkalar(m3,2);
	OperasiMatriks.tampilMatriks(m9);
	document.write("<br/>");

	var v1 = OperasiMatriks.generateIndRiil(nGen);
	var v2 = OperasiMatriks.ubahEncodingRiilKeBulat(v1);
	document.write("Vektor 1 :"+v2+" <br />");
	document.write("Tambah Vektor Baris Kolom : <br />");
	var m14 = OperasiMatriks.tambahVektorBarisKolom(m3,v2);
	OperasiMatriks.tampilMatriks(m14);
	document.write("<br/>");

	var v3 = OperasiMatriks.generateIndRiil(nGen);
	var v4 = OperasiMatriks.ubahEncodingRiilKeBulat(v3);
	document.write("Vektor 1 :"+v4+" <br />");
	document.write("Tambah Vektor Baris Kolom : <br />");
	var m18 = OperasiMatriks.tambahVektorBarisKolom(m4,v4);
	OperasiMatriks.tampilMatriks(m18);
	document.write("<br/>");
	
	document.write("Gabung 2 Matriks : <br />");
	var m15 = OperasiMatriks.gabung2Matriks(m3,m4);
	OperasiMatriks.tampilMatriks(m15);
	document.write("<br/>");

	document.write("Ambil Vektor Baris : <br />");
	var m16 = OperasiMatriks.ambilVektorBaris(m3,0);
	document.write(m16+"<br/>");
	document.write("<br/>");

	document.write("Ambil Vektor Kolom : <br />");
	var m17 = OperasiMatriks.ambilVektorKolom(m3,0);
	document.write(m17+"<br/>");
	document.write("<br/>");



	
	
	
</script>


</body>


</html>