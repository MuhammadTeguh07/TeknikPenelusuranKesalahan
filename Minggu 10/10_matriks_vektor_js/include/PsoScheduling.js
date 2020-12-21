//####################################################################################
//			PsoScheduling
//####################################################################################
var PsoScheduling = {
/*
   generate individu ==> contoh
   ruang (3) :  0  0  0  0  0  0  1  1  1  1   1   1   2   2   2   2   2  2
   hari	(2)  :  0  0  0  1  1  1  0  0  0  1   1   1   0   0   0   1   1  1  
   jam(3 )   :  0  1  2  0  1  2  0  1  2  0   1   2   0   1   2   0   1  2
   gen		 :  0  1  2  3  4  5  6  7  8  9  10   11 12  13  14  15  16  17
   3*2*3 = 18 (0 - 17)  
*/ 
	generateIndBulat : function(nGen){ //nGen = nSlot
		var vtemp = this.generateIndRiil(nGen);
		//OperasiVektor.tampilVektorRiil(vtemp);
		var vInd = OperasiVektor.ambilIndeksVektorSort(vtemp);
		return vInd;
	},
	generateIndRiil : function(nGen){ //nGen = nSlot
		var vInd = OperasiVektor.isiAwal(nGen);
		for(var i=0;i<nGen;i++) vInd[i] = Math.random();
		return vInd;
	},
	ubahEncodingRiilKeBulat : function(v1){
		//var vtemp = this.generateIndRiil(nGen);
		//OperasiVektor.tampilVektorRiil(vtemp);
		var vtemp = OperasiVektor.ambilIndeksVektorSort(v1);
		var vInd = OperasiVektor.ambilIndeksVektorSort(vtemp);
		return vInd;
	},
	/*
		generate populasi 
		nInd ==> banyaknya individu/partikel 
		nSlot ==> banyaknya slot yang tersedia
	*/
	generatePop : function(nInd,nSlot){
		var matPop = new Array(nInd);
		for(var i=0;i<nInd;i++){
			matPop[i] = this.generateIndRiil(nSlot);
		}
		return matPop;
	},
	ubahPopKeBulat : function(matPop){
		var nInd = matPop.length;
		var matPopBulat = new Array(nInd);
		for(var i=0;i<nInd;i++){
			matPopBulat[i] = this.ubahEncodingRiilKeBulat(matPop[i]);
		}
		return matPopBulat;
	},
	 /*
	buat matriks hari vs jam kuliah per ruang
	hari : senin, selasa, rabu, kamis, jum'at ==> 5 hari
	jam kuliah : 1-2, 3-5, 5-6, 7-8, 9-10 ==> 5 jam kuliah
	untuk cek ==> kapasitas ruang dan peserta MK
	*/
	matRuangHariJam : function(ind,jruang,jhari,jam){
	 var arr3dim = OperasiArray3Dim.isiAwalArray3Dim(jruang,jhari,jam);
     var indeks = 0;
     for(var k=0;k<jruang;k++){
       for(var i=0;i<jhari;i++){       
            for(var j=0;j<jam;j++) {            
                arr3dim[k][i][j] = ind[indeks];
                indeks++;
                }
            }
        }    
      return arr3dim;          
   },
   showMatRuangHariJam : function(arr3dim, jruang, jhari, jam){
	for(var k=0;k<jruang;k++){
	   for(var i=0;i<jhari;i++){
	       for(var j=0;j<jam;j++){
	            document.write("Jam ke-"+k+", ");
				document.write("Hari ke-"+i+", "); 					
				document.write("Ruang ke-"+j+" ==> ");
				document.write(arr3dim[k][i][j].toFixed(3)+"<br /> ");
		   }
	       //document.write("<br />");		
	      } 
	   document.write("<br />");     
	   }    
   },
	/*
	buat matriks jam vs ruang kuliah per hari
	hari : senin, selasa, rabu, kamis, jum'at ==> 5 hari
	jam kuliah : 1-2, 3-5, 5-6, 7-8, 9-10 ==> 5 jam kuliah
	untuk cek ==> seorang dosen tidak boleh mengajar di waktu yg sama di ruang berbeda
   		  ==> mhs semester yang sama di ruang berbeda
   		  ==> 
	*/
	matHariJamRuang : function (ind , jruang, jhari, jam){
		var arr3dim = OperasiArray3Dim.isiAwalArray3Dim(jhari,jam,jruang);
		var indeks = 0;
		var iter = 0;
		for(var k=0;k<jhari;k++){
       //mulai = k* jhari; 
			for(var i=0;i<jam;i++){                                 
				indeks = iter;
				iter++;   
				for(var j=0;j<jruang;j++) {           
					arr3dim[k][i][j] = ind[indeks];
					indeks +=jhari * jam ;
					}
				indeks = 0;     
             //i=0;
				}
			}    
		return arr3dim;          
	},
	showMatHariJamRuang : function (arr3dim, jruang, jhari, jam){
		for(var k=0;k<jhari;k++){
			//document.write( "Hari ke-".k." : <br>");  //, ,
			for(var i=0;i<jam;i++){
				//document.write( "Jam ke-".i." : ");
				for(var j=0;j<jruang;j++){
					document.write("Hari ke-"+k+", ");
					document.write("Jam ke-"+i+", "); 					
					document.write("Ruang ke-"+j+" ==> ");
					document.write(arr3dim[k][i][j].toFixed(3)+"<br /> ");
					}
				//document.write("<br />"); 		
				} 
			document.write("<br />");      
		}    
	},
	/*
	buat matriks hari vs ruang kuliah per jam
	hari : senin, selasa, rabu, kamis, jum'at ==> 5 hari
	jam kuliah : 1-2, 3-5, 5-6, 7-8, 9-10 ==> 5 jam kuliah
	untuk cek ==> seorang dosen tidak boleh mengajar di waktu yg sama di ruang berbeda
			  ==> mhs semester yang sama di ruang berbeda
   		      ==> 
	*/
	matJamHariRuang : function(ind , jruang, jhari, jam){
		var arr3dim = OperasiArray3Dim.isiAwalArray3Dim(jam,jhari,jruang);
		//document.write("matJamHariRuang <br />");
		var indeks = 0;   
		var iter = 0;		
		for(var k=0;k<jam;k++){
			iter =  k;
			for(var i=0;i<jhari;i++){                                
				indeks = iter; // iter;
				iter += jam;   
				for(var j=0;j<jruang;j++) {           
					arr3dim[k][i][j] = ind[indeks];
					indeks = indeks + jhari * jam ;
					}
					indeks = 0;     
				}
			}    
      return arr3dim;          
	},
	showMatJamHariRuang : function(arr3dim,jruang,jhari,jam){
		for(var k=0;k<jam;k++){
			//document.write("Jam ke-"+k+", "); 
			for(var i=0;i<jhari;i++){
				//document.write("Hari ke-"+i+", ");
				for(var j=0;j<jruang;j++){
					document.write("Jam ke-"+k+", "); 
					document.write("Hari ke-"+i+", ");
					document.write("Ruang ke-"+j+" ==> ");
					document.write(arr3dim[k][i][j].toFixed(3)+"<br /> ");
				}
				//document.write("<br />");		
			} 
			document.write("<br />");     
		}   
	},
	
     /*
	buat matriks kode ruang , hari dan jam kuliah
	hari : senin, selasa, rabu, kamis, jum'at ==> 5 hari
	jam kuliah : 1-2, 3-5, 5-6, 7-8, 9-10 ==> 5 jam kuliah
	untuk cek ==> kapasitas ruang dan peserta MK
	*/
	//*
	matKodeRuangHariJam : function(ind,jslot,jruang,jhari,jam){
     // MK--ruang--hari--jam -- pinalti dosen -- pinalti ruang	
	 //document.write("matKodeRuangHariJam <br />");	 
     var kodeRHJ = Array();
     for(var kk=0;kk<jslot;kk++){
       kodeRHJ[kk] = Array();
       for(var ii=0;ii<6;ii++){
          if(ii == 0) kodeRHJ[kk][ii] = ind[kk];
          	     else kodeRHJ[kk][ii]= 0;
       }
     }
     var indeks = 0;
     for(var k=0;k<jruang;k++){
		for(var i=0;i<jhari;i++){     
            for(var j=0;j<jam;j++) {            
                kodeRHJ[indeks][1] = k;
                kodeRHJ[indeks][2] = i;
                kodeRHJ[indeks][3] = j;
                indeks++;
                }
            }
        }    
      return kodeRHJ;          
	},
	
	/*
	hitung pinalti daya tampung mk terhadap kapasitas ruang
    	sesuai ==> 10
    	tidak sesuai ==> 500   	
		kode = 0 ==> pinaltiRuang
      	kode = 1 ==> mkKenaPinaltiRuang
		mat Ruang ==> mat ruang
		mat Mk Dosen ==> mat MK dan dosen
	*/  
	//hitTampungRuang : function(pinaltiRuang,kode){ //
	//hitTampungRuang : function(vInd, mRuang, mMkDosen,jruang, jhari, jam,kode){
	hitTampungRuang : function(vInd, vRuang, vDT,jruang, jhari, jam,kode){
	    document.write("######### hitTampungRuang ######### <br />");
		OperasiVektor.tampilVektor(vRuang);
		document.write("kode : "+kode+" <br />");
        //*
		var mRHJ = this.matRuangHariJam(vInd , jruang, jhari, jam);
        //var jslot = jruang*jhari*jam;
		/*
        //var jmk = mMkDosen.length;
		var jmk = vDT.length;
        var mkPinaltiRuang = [0];
        var pinaltiRuang = 0;
		var iMK = 0;
        for(var k=0;k<jruang;k++){
       		for(var i=0;i<jhari;i++){
            	for(var j=0;j<jam;j++) {          
                	iMK = mRHJ[k][i][j];
                	     // kapasitas ruang  ==> pada kolom ke 2
//document.write(mRuang[k][1]+" dan "+mMkDosen[iMK][5]+"==>");
					if(iMK < jmk) {
                	    //if(mRuang[k][1] < mMkDosen[iMK][5])
						if(vRuang[k] < vDT[iMK])
                	     	{ 
                	     // daya tampung mk ==> pada kolom ke 6 
                	     	pinaltiRuang +=500;
                	     	mkPinaltiRuang.push(1); // [] = 1;
//document.write( " iMK ==> 1 <br>");
                	     	}
                	     	else  {
                	     		pinaltiRuang +=1;
                	     		mkPinaltiRuang.push(0); //[] = 0;
//document.write( " iMK ==> 0 <br>");
                	     		}
                	    }
                	    else mkPinaltiRuang.push(0); //[] = 0; 	
//document.write( pinaltiRuang ."<br>");
				}					       
            }
        }   
//*/		
      if(kode==0) return pinaltiRuang;
      		else return mkPinaltiRuang; 
			//else return (2+pinaltiRuang);
      },
	  coba : function(a,b,c,d,e,f,g,h,i,j){
		return(a+b+c+d+e+f+g+h+i+j);
	  }

};

//####################################################################################
//			OperasiMatriks
//####################################################################################
var OperasiMatriks = {
		isiAwalMatriks : function(bar , kol){
			//document.write("isiAwalMatriks <br />");
			var mat = new Array(bar);
			//for(var i=0;i<bar;i++) if(i>0) mat[i].push(0);
			for(var i=0;i<bar;i++){	
				//var v1 = OperasiVektor.isiAwal(kol);
				mat[i] = new Array(kol); //.push(v1);
				for(var j=0;j<kol;j++) mat[i][j]=0;
				}
			//this.tampilMatriks(mat);
			return mat;
		},
		kaliSkalar : function(mat1, k){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			//document.write("nilai n : "+n+" dan m : "+m+"<br />");
			var mathas1 = this.isiAwalMatriks(n,m);
			//this.tampilMatriks(mathas1);
			//this.tampilMatriks(mat1);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) {
				//document.write("nilai i : "+i+" dan j : "+j+"<br />");
					mathas1[i][j] = mat1[i][j]*k;
					}
				}
			//this.tampilMatriks(mathas1);	
			return mathas1;
		},
		bagiSkalar : function(mat1, k){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1[i][j] = mat1[i][j]/k;
				}
			return mathas1;
		},
		kurangSkalar : function(mat1, k){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1[i][j] = mat1[i][j]-k;
				}
			return mathas1;
		},
		jumlah2Matriks : function(mat1, mat2){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1[i][j] = mat1[i][j]+mat2[i][j];
				}
			return mathas1;
		},
		kurang2Matriks : function(mat1, mat2){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1[i][j] = mat1[i][j]-mat2[i][j];
				}
			return mathas1;
		},
		operatorDotMatriks : function(mat1, mat2){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1[i][j] = mat1[i][j]*mat2[i][j];
				}
			return mathas1;
		},
		kuadratMatriks : function(mat1){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1[i][j] = mat1[i][j]*mat1[i][j];
				}
			return mathas1;
		},
		jumlahMatriks : function(mat1){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = 0; //this.isiAwalMatriks(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) mathas1 = mathas1 + mat1[i][j];
				}
			return mathas1;
		},
		hitungMean : function(mat1){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var mathas1 = this.jumlahMatriks(mat1);
			return mathas1/(n*m);
		},
		tambahVektorBarisKolom : function(mat1, v1){			
		    var n = mat1.length; 
			var m = mat1[0].length;
			var size = v1.length;
			//var n1 = n+1;
			//document.write("nilai n : "+n+" dan m : "+m+" dan size : "+size+"<br />");
			//document.write("Masuk ==> tanbahVektorBaris <br />");
			//this.tampilMatriks(mat1);
			if(m == size){
			    //OperasiVektor.tampilVektor(v1);
				//document.write("nilai n1 : "+n1+" dan m : "+m+" dan size : "+size+"<br />");
				var mathas1 = this.isiAwalMatriks(n+1,m);
				//document.write("tampilMatriks(mathas1) <br />");
				//this.tampilMatriks(mathas1);
				for(var i=0;i<=n;i++) {
				//document.write("loop <br />");
					for(var j=0;j<m;j++) 					
						if(i<n) mathas1[i][j] = mat1[i][j];
						    else mathas1[i][j] = v1[j];
					}
				} 
				else 
				if(n == size){
			    //OperasiVektor.tampilVektor(v1);
				//document.write("nilai n1 : "+n1+" dan m : "+m+" dan size : "+size+"<br />");
					var mathas1 = this.isiAwalMatriks(n,m+1);
				//document.write("tampilMatriks(mathas1) <br />");
				//this.tampilMatriks(mathas1);
					for(var i=0;i<n;i++) {
				//document.write("loop <br />");
						for(var j=0;j<=m;j++) 					
							if(j<m) mathas1[i][j] = mat1[i][j];
								else mathas1[i][j] = v1[i];
						}
					} else {
						document.write("Tidak bisa nambah baris ataupun kolom");
						return;
					   }
			//this.tampilMatriks(mathas1);	
			return mathas1;
		},
		gabung2Matriks : function(mat1, mat2){	
			// baris = true ==> gabung kolomnya
		    var n1 = mat1.length; 
			var m1 = mat1[0].length;
			var n2 = mat2.length;
			var m2 = mat2[0].length;
			if(n1==n2){
				var mathas1 = this.isiAwalMatriks(n1,m1+m2);
				for(var i=0;i<n1;i++) {
					for(var j=0;j<m1;j++) mathas1[i][j] = mat1[i][j];
					for(var j=0;j<m2;j++) mathas1[i][m1+j] = mat2[i][j];
					}
				}
				else {
					var mathas1 = this.isiAwalMatriks(n1+n2,m1);
					for(var j=0;j<m1;j++) {
						for(var i=0;i<n1;i++) mathas1[i][j] = mat1[i][j];
						for(var i=0;i<n2;i++) mathas1[i+n1][j] = mat2[i][j];							
					}
				}
			return mathas1;
		},
		ambilVektorBaris : function(mat1, barisKe){			
		    //var n = mat1.length; 
			var m = mat1[0].length;
			var v1 = OperasiVektor.isiAwal(m);
			for(var j=0;j<m;j++) v1[j] = mat1[barisKe][j];
			return v1;
		},
		ambilVektorKolom : function(mat1, kolomKe){			
		    var n = mat1.length; 
			//var m = mat1[0].length;
			var v1 = OperasiVektor.isiAwal(n);
			for(var i=0;i<n;i++) v1[i] = mat1[i][kolomKe];
			return v1;
		},
		// sort matriks berdasarkan barisKe
		sortMatriksBaris : function(mat1, barisKe){			
		    //var n = mat1.length; 
			//var m = mat1[0].length;
			//var v1 = OperasiVektor.isiAwal(n);
			//for(var i=0;i<n;i++) v1[i] = mat1[i][kolomKe];
			//return v1;
		},
		tampilMatriks : function(mat1){
					//document.write("tampil <br />"); sort(function(a, b){return b-a});
					var n = mat1.length; 
					var m = mat1[0].length;
					//document.write("nilai n : "+n);
					for(var i=0;i<n;i++) {
						for(var j=0;j<m;j++) {
						   if(Number.isInteger(mat1[i][j])) 	
							  document.write(mat1[i][j]+" ");
							    else document.write(mat1[i][j].toFixed(3)+" ");					   
						}
					document.write("<br />");	
					}	
		},
		
	
		tampilMatriksString : function(mat1){
					//document.write("tampil <br />"); sort(function(a, b){return b-a});
					var n = mat1.length; 
					var m = mat1[0].length;
					//document.write("nilai n : "+n);
					for(var i=0;i<n;i++) {
						for(var j=0;j<m;j++) {
						   document.write(mat1[i][j]+" ");
						}
					document.write("<br />");	
					}	
		}
		//*/
		
	};
//####################################################################################
//			OperasiArray3Dim
//####################################################################################	
var OperasiArray3Dim = {
		isiAwalArray3Dim : function(bar , kol, tinggi){
			//document.write("isiAwalArray3Dim <br />");
			var a3dim = new Array(bar);
			//for(var i=0;i<bar;i++) if(i>0) a3dim[i].push(0);
			for(var i=0;i<bar;i++){	
				//var v1 = OperasiVektor.isiAwal(kol);
				a3dim[i] = new Array(kol); //.push(v1);
				for(var j=0;j<kol;j++) {
					a3dim[i][j] = new Array(tinggi);
					for(var k=0;k<tinggi;k++)
						 a3dim[i][j][k]=0;
						}
				}
			//this.tampilArray3Dim(a3dim);
			return a3dim;
		},
		kaliSkalar : function(a3dim1, konstanta){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var p = a3dim1[0][0].length;
			//document.write("nilai n : "+n+" dan m : "+m+"<br />");
			var a3dimhas1 = this.isiAwalArray3Dim(n,m,p);
			//this.tampilArray3Dim(a3dimhas1);
			//this.tampilArray3Dim(a3dim1);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) {
				//document.write("nilai i : "+i+" dan j : "+j+"<br />");
					for(var k=0;k<p;k++)
						a3dimhas1[i][j][k] = a3dim1[i][j][k]*konstanta;
					}
				}
			//this.tampilArray3Dim(a3dimhas1);	
			return a3dimhas1;
		},
/*		
		bagiSkalar : function(a3dim1, k){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1[i][j] = a3dim1[i][j]/k;
				}
			return a3dimhas1;
		},
		kurangSkalar : function(a3dim1, k){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1[i][j] = a3dim1[i][j]-k;
				}
			return a3dimhas1;
		},
		jumlah2Array3Dim : function(a3dim1, a3dim2){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1[i][j] = a3dim1[i][j]+a3dim2[i][j];
				}
			return a3dimhas1;
		},
		kurang2Array3Dim : function(a3dim1, a3dim2){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1[i][j] = a3dim1[i][j]-a3dim2[i][j];
				}
			return a3dimhas1;
		},
		operatorDotArray3Dim : function(a3dim1, a3dim2){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1[i][j] = a3dim1[i][j]*a3dim2[i][j];
				}
			return a3dimhas1;
		},
		kuadratArray3Dim : function(a3dim1){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1[i][j] = a3dim1[i][j]*a3dim1[i][j];
				}
			return a3dimhas1;
		},
		jumlahArray3Dim : function(a3dim1){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = 0; //this.isiAwalArray3Dim(n,m);
			for(var i=0;i<n;i++) {
				for(var j=0;j<m;j++) a3dimhas1 = a3dimhas1 + a3dim1[i][j];
				}
			return a3dimhas1;
		},
		hitungMean : function(a3dim1){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var a3dimhas1 = this.jumlahArray3Dim(a3dim1);
			return a3dimhas1/(n*m);
		},
		tambahVektorBarisKolom : function(a3dim1, v1){			
		    var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var size = v1.length;
			//var n1 = n+1;
			//document.write("nilai n : "+n+" dan m : "+m+" dan size : "+size+"<br />");
			//document.write("Masuk ==> tanbahVektorBaris <br />");
			//this.tampilArray3Dim(a3dim1);
			if(m == size){
			    //OperasiVektor.tampilVektor(v1);
				//document.write("nilai n1 : "+n1+" dan m : "+m+" dan size : "+size+"<br />");
				var a3dimhas1 = this.isiAwalArray3Dim(n+1,m);
				//document.write("tampilArray3Dim(a3dimhas1) <br />");
				//this.tampilArray3Dim(a3dimhas1);
				for(var i=0;i<=n;i++) {
				//document.write("loop <br />");
					for(var j=0;j<m;j++) 					
						if(i<n) a3dimhas1[i][j] = a3dim1[i][j];
						    else a3dimhas1[i][j] = v1[j];
					}
				} 
				else 
				if(n == size){
			    //OperasiVektor.tampilVektor(v1);
				//document.write("nilai n1 : "+n1+" dan m : "+m+" dan size : "+size+"<br />");
					var a3dimhas1 = this.isiAwalArray3Dim(n,m+1);
				//document.write("tampilArray3Dim(a3dimhas1) <br />");
				//this.tampilArray3Dim(a3dimhas1);
					for(var i=0;i<n;i++) {
				//document.write("loop <br />");
						for(var j=0;j<=m;j++) 					
							if(j<m) a3dimhas1[i][j] = a3dim1[i][j];
								else a3dimhas1[i][j] = v1[i];
						}
					} else {
						document.write("Tidak bisa nambah baris ataupun kolom");
						return;
					   }
			//this.tampilArray3Dim(a3dimhas1);	
			return a3dimhas1;
		},
		gabung2Array3Dim : function(a3dim1, a3dim2){	
			// baris = true ==> gabung kolomnya
		    var n1 = a3dim1.length; 
			var m1 = a3dim1[0].length;
			var n2 = a3dim2.length;
			var m2 = a3dim2[0].length;
			if(n1==n2){
				var a3dimhas1 = this.isiAwalArray3Dim(n1,m1+m2);
				for(var i=0;i<n1;i++) {
					for(var j=0;j<m1;j++) a3dimhas1[i][j] = a3dim1[i][j];
					for(var j=0;j<m2;j++) a3dimhas1[i][m1+j] = a3dim2[i][j];
					}
				}
				else {
					var a3dimhas1 = this.isiAwalArray3Dim(n1+n2,m1);
					for(var j=0;j<m1;j++) {
						for(var i=0;i<n1;i++) a3dimhas1[i][j] = a3dim1[i][j];
						for(var i=0;i<n2;i++) a3dimhas1[i+n1][j] = a3dim2[i][j];							
					}
				}
			return a3dimhas1;
		},
		ambilVektorBaris : function(a3dim1, barisKe){			
		    //var n = a3dim1.length; 
			var m = a3dim1[0].length;
			var v1 = OperasiVektor.isiAwal(m);
			for(var j=0;j<m;j++) v1[j] = a3dim1[barisKe][j];
			return v1;
		},
		ambilVektorKolom : function(a3dim1, kolomKe){			
		    var n = a3dim1.length; 
			//var m = a3dim1[0].length;
			var v1 = OperasiVektor.isiAwal(n);
			for(var i=0;i<n;i++) v1[i] = a3dim1[i][kolomKe];
			return v1;
		},
		// sort Array3Dim berdasarkan barisKe
		sortArray3DimBaris : function(a3dim1, barisKe){			
		    //var n = a3dim1.length; 
			//var m = a3dim1[0].length;
			//var v1 = OperasiVektor.isiAwal(n);
			//for(var i=0;i<n;i++) v1[i] = a3dim1[i][kolomKe];
			//return v1;
		},
*/		
		tampilArray3Dim : function(a3dim1){
					//document.write("tampil <br />"); sort(function(a, b){return b-a});
					var n = a3dim1.length; 
					var m = a3dim1[0].length;
					var p = a3dim1[0][0].length;
					//document.write("nilai n : "+n);
					for(var i=0;i<n;i++) {
						for(var j=0;j<m;j++) {
							for(var k=0;k<p;k++) {
								document.write(a3dim1[i][j][k]+" ");
								}
							document.write("<br />");	
						}
					document.write("<br />");	
					}	
		},
		tampilArray3DimRiil : function(a3dim1){
					//document.write("tampil <br />"); sort(function(a, b){return b-a});
					var n = a3dim1.length; 
					var m = a3dim1[0].length;
					var p = a3dim1[0][0].length;
					//document.write("nilai n : "+n);
					for(var i=0;i<n;i++) {
						for(var j=0;j<m;j++) {
							for(var k=0;k<p;k++) {
								document.write(a3dim1[i][j][k].toFixed(3)+" ");
								}
							document.write("<br />");
						}
					document.write("<br />");	
					}	
		}
		
	};
//####################################################################################
//			OperasiVektor
//####################################################################################
var OperasiVektor = {
		isiAwal : function(nIsi){
			//document.write("isiAwal <br />");
			var vIsi=[0];
			for(var i=1;i<nIsi;i++) vIsi.push(0);
			return vIsi;
			//for(var i=0;i<nIsi;i++) document.write("nilai vIsi : "+vIsi[i]+"<br />");
		},
		kaliSkalar : function(v1, k){			
		    var n = v1.length; 
			//document.write("nilai v10*k : "+(v1[0]*k)+"<br />");
			//var vhas1 = [v1[0]*k];
			var vhas1 = this.isiAwal(n);
			//for(var i=0;i<n;i++) document.write("nilai vHas1 : "+vhas1[i]+"<br />");
			//this.tampil(vhas1);
			//document.write("nilai v1[0] : "+v1[0]+"<br />");
			//document.write("nilai n : "+n+"<br />");
		    //for(var i=1;i<n;i++) {
			for(var i=0;i<n;i++) {
				//document.write("nilai i : "+i+"<br />");
				//vhas1.push(v1[i]*k);
				vhas1[i]=v1[i]*k;
				}
			//document.write("nilai vHas1[0] : "+vhas1[0]+"<br />");
			return vhas1;
		},
		bagiSkalar : function(v1, k){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				vhas1[i]=v1[i]/k;
				}
			return vhas1;
		},
		kurangSkalar : function(v1, k){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				vhas1[i]=v1[i]-k;
				}
			return vhas1;
		},
		jumlah2Vektor : function(v1, v2){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				vhas1[i]=v1[i]+v2[i];
				}
			return vhas1;
		},
		kurang2Vektor : function(v1, v2){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				vhas1[i]=v1[i]-v2[i];
				}
			return vhas1;
		},
		operatorDotVektor : function(v1, v2){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				vhas1[i]=v1[i]*v2[i];
				}
			return vhas1;
		},
		kuadratVektor : function(v1){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				vhas1[i]=v1[i]*v1[i];
				}
			return vhas1;
		},
		jumlahVektor : function(v1){			
		    var n = v1.length; 
			var jlh = 0;
			//var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				jlh = jlh + v1[i];
				}
			return jlh;
		},
		hitungMean : function(v1){			
		    var n = v1.length; 
			var jlh = this.jumlahVektor(v1);
			return jlh/n;
		},
		hitungVarians : function(v1){			
		    var n = v1.length; 						
			var hm = this.hitungMean(v1);
			var kvk = this.kurangSkalar(v1, hm);
			var kv = this.kuadratVektor(kvk);
			var jlh = this.jumlahVektor(kv);			
			return jlh/(n-1);
		},
		gabung2Vektor : function(v1, v2){			
		    var n = v2.length; 			
			//var vhas1 = this.isiAwal(n);			
			for(var i=0;i<n;i++) {				
				v1.push(v2[i]);
				}
			return v1;
		},
		/*
		input 	: vektor data dan k -> banyaknya elemen yang diambil 
		Output 	: vektor yang berisi k elemen dari vektor data
		fungsi	: mengambil vektor dari suatu vektor (k elemen pertama)
		*/
		ambilVektorDariVektor : function(v1, k){			
		    //var n = v1.length; 			
			var vhas1 = this.isiAwal(k);			
			for(var i=0;i<k;i++) {				
				vhas1[i]=v1[i];
				}
			return vhas1;
		},
		// mengambil indeks dari vektor yang di-sort 
		ambilIndeksVektorSort : function(v1){			
		    var n = v1.length;			
			var vSort = this.isiAwal(n);
			for(var i=0;i<n;i++) vSort[i] = v1[i];
			vSort.sort();
			var vhas1 = this.isiAwal(n);	 
//document.write("v1 : ");this.tampilVektorRiil(v1);document.write("<br />");
//document.write("vSort : ");this.tampilVektorRiil(vSort);document.write("<br />");
//document.write("vhas1 : ");this.tampilVektorRiil(vhas1);document.write("<br />");			
			for(var i=0;i<n;i++) 
				for(var j=0;j<n;j++)
				   if(v1[j]==vSort[i]) {
								vhas1[i]=j;
								break;
								}
			return vhas1;
		},
		/*
		input 	: vektor data dan  k -> banyaknya elemen yang dibuang
		Output 	: vektor yang berisi k elemen dari vektor data
		fungsi	: menghilangkan vektor dari suatu vektor (k elemen pertama)
		*/
		hilangVektorDariVektor : function(v1, k){			
		    var n = v1.length; 			
			var vhas1 = this.isiAwal(n-k);			
			for(var i=0;i<n-k;i++) {				
				vhas1[i]=v1[i+k];
				}
			return vhas1;
		},
		/*
		input 	: vektor data
		Output 	: nilai maksimum
		fungsi	: untuk mendapatkan nilai maksimum di suatu vektor data
		*/
		hitungMax : function(v1){			
		    var n = v1.length; 			
			//var vhas1 = v1[0]; // = this.isiAwal(n-k);			
			//for(var i=1;i<n;i++) {				
			//	if(vhas1<v1[i]) vhas1 = v1[i];
			//	}
			//return vhas1;
			return v1.sort()[n-1];
		},
		/*
		input 	: vektor data
		Output 	: nilai minimum
		fungsi	: untuk mendapatkan nilai minimum di suatu vektor data
		*/
		hitungMin : function(v1){			
		    //var n = v1.length; 			
			//var vhas1 = v1[0]; // = this.isiAwal(n-k);			
			//for(var i=1;i<n;i++) {				
			//	if(vhas1>v1[i]) vhas1 = v1[i];
			//	}
			//return vhas1;
			return v1.sort()[0];
		},
		/*
		input 	: vektor data
		Output 	: sort dari kecil ke besar
		fungsi	: untuk mendapatkan sort suatu vektor data
		*/
		urutAsc : function(v1){			
			return v1.sort();
		},
		/*
		input 	: vektor data
		Output 	: sort dari besar ke kecil
		fungsi	: untuk mendapatkan sort suatu vektor data
		*/
		urutDesc : function(v1){			
			return v1.sort(function(a, b){return b-a});
		},
		tampilVektor : function(v2){
					//document.write("tampil <br />"); sort(function(a, b){return b-a});
					var n = v2.length; 
					//document.write("nilai n : "+n);
					for(var i=0;i<n;i++) {
						if(Number.isInteger(v2[i]))
							if(i<n-1) document.write(v2[i]+" ");
								else document.write(v2[i]);
							else 
								if(i<n-1) document.write(v2[i].toFixed(3)+" ");
									else document.write(v2[i].toFixed(3));
								
						}
		}
		/*,
		tampilVektorRiil : function(v2){
					//document.write("tampil <br />"); sort(function(a, b){return b-a});
					var n = v2.length; 
					//document.write("nilai n : "+n);
					for(var i=0;i<n;i++) {
						if(i<n-1) document.write(v2[i].toFixed(3)+" ");
							else document.write(v2[i].toFixed(3));
						}
		}	*/	
	};  
		

 	