<?php

class TopsisOrisinil{

 public function __construct(){ } 
 
    /* ###################################################################################### 
   //  D A T A 
     /*
	input 	: 
	Output 	: 
	fungsi	: 
  */
   public function kriteriaCostBenefit(){  
        $v = array( 'cost', 'benefit', 'benefit', 'benefit', 'benefit', 'benefit'); 		
   	return $v;	
    }
   /*
	input 	: 
	Output 	: 
	fungsi	: 
  */
   public function labelBaris(){  
        $v = array('Galaxy', 'Iphone', 'BB', 'Lumia'); 		
   	return $v;	
    } 
  /*
	input 	: 
	Output 	: vektor berisi bilangan bulat
	fungsi	: untuk membuat array yang berisi tentang derajat kepentingan per atribut
 */
 public function ambilKepentingan(){
 	$v = array(4,	5,	4,	3,	3,	2); 		
   	return $v;       
 	}   
       
   /*  
	input 	: 
	Output 	: 
	fungsi	: 
  */
   public function dataTopsis(){  
        $mat = array (array(3500,	70,	10,	80,	3000,	36),
			array(4500,	90,	10,	60,	2500,	48),
			array(4000,	80,	9,	90,	2000,	48),
			array(4000,	70,	8,	50,	1500,	60)
			);  		
   	return $mat;	
   }

   /* ######################################################################################
   /* 	
 	
 /*
	input 	: matriks data
	Output 	: vektor yang berisi akar kuadrat dari jumlahan kuadrat per atribut
	fungsi	: untuk menghitung vektor pembagi per kolom data
 */
 public function pembagiTopsis($mat){
 	$bar=count($mat);
   	$kol=(count($mat,1)/count($mat,0))-1;
   	for($i=0;$i<$kol;$i++){
   		$vhas[$i]=array();
   		$temp=0;
   		for($j=0;$j<$bar;$j++){
   	   		$temp=$temp+$mat[$j][$i]*$mat[$j][$i];
  			}
  		$vhas[$i]=sqrt($temp);	
   		}
   	return $vhas;
 	}
 /*
	input 	: matriks data
	Output 	: matriks data yang per kolomnya telah dengan elemen vektor
		  pembagi 
	fungsi	: untuk menghitung matriks yang ternormalisasi
 */
 public function ternormalisasiTopsis($mat){
 	$bar=count($mat);
   	$kol=(count($mat,1)/count($mat,0))-1;
   	$vBagi=TopsisOrisinil::pembagiTopsis($mat);
   	for($i=0;$i<$bar;$i++){
   		$mhas[$i][]=array();   		
   		for($j=0;$j<$kol;$j++){
   	   		$mhas[$i][$j]=$mat[$i][$j]/$vBagi[$j]; //operasi perkalian diganti pembagian
  			} 		
   		}
   	return $mhas;
 	}
 /*
	input 	: matriks data dan vektor yang berisi nilai kepentingan per atibut
	Output 	: matriks terboboti
	fungsi	: menghitung matriks terboboti
 */
 public function terbobotiTopsis($mat, $vPenting){
 	$bar=count($mat);
   	$kol=(count($mat,1)/count($mat,0))-1;
	$mhas = array();
//   	$vBagi=TopsisOrisinil::pembagiTopsis($mat);
   	for($i=0;$i<$bar;$i++){
   		$mhas[$i]=array();   		
   		for($j=0;$j<$kol;$j++){
   	   		$mhas[$i][$j]=$mat[$i][$j]*$vPenting[$j];//operasi pembagian diganti perkalian
  			} 		
   		}
   	return $mhas;
 	}
 	
/* ######################################################################################
         OPERASI=OPERASI DALAM VEKTOR DAN MATRIKS
 */ ###################################################################################### 	
 /*
	input 	: matriks data dan kolom ke-k
	Output 	: vektor yang berisi kolom ke-k dari matriks data
	fungsi	: mengambil vektor kolom dari suatu matriks
 */
  public function ambilKolom($mat,$k){
 	$bar=count($mat);
	$vhas = array();		
   	for($i=0;$i<$bar;$i++){
   	   	$vhas[]=$mat[$i][$k];	
   		}
   	return $vhas;
 	}
 /*
	input 	: matriks data dan baris ke-b
	Output 	: vektor yang berisi baris ke-b dari matriks data
	fungsi	: mengambil vektor baris dari suatu matriks
 */	
  public function ambilBaris($mat,$b){
 	$kol=(count($mat,1)/count($mat,0))-1;
	$vhas = array();		
   	for($i=0;$i<$kol;$i++){
   	   	$vhas[]=$mat[$b][$i];	
   		}
   	return $vhas;
 	}
 /*
	input 	: vektor data
	Output 	: nilai maksimum
	fungsi	: untuk mendapatkan nilai maksimum di suatu vektor data
 */
  public function hitungMax($v){
 	$bar=count($v);
	$has=$v[0];		
   	for($i=1;$i<$bar;$i++){
   	   	if($has>$v[$i]) $has=$v[$i];	
   		}
   	return $has;
 	}
/*
	input 	: vektor data
	Output 	: nilai minimum
	fungsi	: untuk mendapatkan nilai minimum di suatu vektor data
 */	
  public function hitungMin($v){
 	$bar=count($v);
	$has=$v[0];		
   	for($i=1;$i<$bar;$i++){
   	   	if($has<$v[$i]) $has=$v[$i];	
   		}
   	return $has;
 	}
/*
	input 	: 2 vektor data --> v1 dab v2
	Output 	: vektor hasil pengurangan v1-v2
	fungsi	: menghitung nilai pengurangan antara 2 vektor 
 */	 
  public function kurang2Vektor($x1, $x2){
 	$hasil2 = array();
 	$nx=count($x1);
	for($i=0;$i<$nx;$i++){
		//$hasil2[]=$x1[$i]-$x1[$i];
		$hasil2[$i]=$x2[$i]-$x1[$i];
	        }
	return $hasil2;        
 	}
 /*
	input 	: vektor data
	Output 	: vektor yang merupakan kuadrat dari elemen vektor data
	fungsi	: menghitung nilai kuadrat per elemen suatu vektor
 */	
  public function kuadratVektor($x1){
 	$hasil8 = array();
 	$nx=count($x1);
	for($i=0;$i<$nx;$i++){
		//$hasil8[] = $x1[$i]*$x1[$i]*$x1[$i];
		$hasil8[$i] = $x1[$i]*$x1[$i];
	        }
	return $hasil8;        
 	} 
 /*
	input 	: vektor data
	Output 	: nilai dari jumlahan semua elemen vektor
	fungsi	: menghitung nilai dari jumlahan semua elemen vektor
 */	
  public function jlhVektor($x1){
 	//$hasil=1;
	$hasil=0;
 	$nx=count($x1);
	for($i=0;$i<$nx;$i++){
		$hasil += $x1[$i];
	        }
	return $hasil;        
 	} 
 /*
	input 	: vektor data
	Output 	: nilai rata-rata semua elemen vektor
	fungsi	: menghitung nilai rata-rata semua elemen vektor
 */	
  public function rataVektor($x1){
 	$nx=count($x1);	
	return TopsisOrisinil::jlhVektor($x1)/$nk;        
 	} 	
 /*
	input 	: vektor data
	Output 	: vektor yang sudah terurut dari kecil ke besar
	fungsi	: mengurutkan elemen-elemen vektor dari kecil ke besar
 */
 public function sortVektorAsc($vSort){
        $uk=count($vSort);
        for($i=0;$i<$uk-1;$i++){
            for($j=$i;$j<$uk;$j++){
              if($vSort[$i]>$vSort[$j]) {
                  $kerja=$vSort[$i];
                  $vSort[$i]=$vSort[$j];
                  $vSort[$j]=$kerja;
                }
            }
        }
        return $vSort;
     }	
 /*
	input 	: vektor data
	Output 	: vektor yang sudah terurut dari besar ke kecil
	fungsi	: mengurutkan elemen-elemen vektor dari besar ke kecil
 */
 public function sortVektorDesc($vSort){
        $uk=count($vSort);
        for($i=0;$i<$uk-1;$i++){
            for($j=$i;$j<$uk;$j++){
              if($vSort[$i]<$vSort[$j]) {
                  $kerja=$vSort[$i];
                  $vSort[$i]=$vSort[$j];
                  $vSort[$j]=$kerja;
                }
            }
        }
        return $vSort;
     }	
 /*
	input 	: vektor data
	Output 	: vektor yang berisi indeks dari vektor terurut dari besar ke kecil
	fungsi	: mengambil indeks dari elemen-elemen vektor dari besar ke kecil
 */
 public function ambilIndeksVektorDesc($v){
        $uk=count($v);
        $vIndeks=array();
        for($i=0;$i<$uk;$i++){
            $vIndeks[]=$i;
        }
        for($i=0;$i<$uk-1;$i++){
            for($j=$i;$j<$uk;$j++){
              if($v[$i]<$v[$j]) {
                  $kerja=$v[$i];
                  $v[$i]=$v[$j];
                  $v[$j]=$kerja;
                  $kerja2=$vIndeks[$i];
                  $vIndeks[$i]=$vIndeks[$j];
                  $vIndeks[$j]=$kerja2;
                }
            }
        }
        return $vIndeks;
     }		
  /* ###################################################################################### 
  	AKHIR OPERASI=OPERASI DALAM VEKTOR DAN MATRIKS
  */ ######################################################################################
 /*
	input 	: matriks data terboboti dan vektor cost benefit
	Output 	: matriks A+-
	fungsi	: menghitung matriks A+-
 */
  public function hitungAPlusMin($mat, $vBen){
 	$bar=count($mat);
   	$kol=(count($mat,1)/count($mat,0))-1;
	$mA = array();
   	for($i=0;$i<2;$i++){
   		$mA[$i]=array();
		for($j=0;$j<$kol;$j++){
			$mA[$i][$j]=0;
		}
	}		
	//echo "vBen[j] -->". $vBen[0]." <br \n>";	
	$temp="benefit";
	for($j=0;$j<$kol;$j++){
		$vTemp=TopsisOrisinil::ambilKolom($mat,$j);
		//$temp=$vBen[$j];	
		if($vBen[$j]==$temp){ //equalsIgnoreCase
		        $mA[0][$j]=TopsisOrisinil::hitungMin($vTemp);	//di ganti posisinya
				$mA[1][$j]=TopsisOrisinil::hitungMax($vTemp);
		    }
			 else  {
				$mA[0][$j]=TopsisOrisinil::hitungMax($vTemp);
                $mA[1][$j]=TopsisOrisinil::hitungMin($vTemp);				
			 } 	
	}	
   	return $mA;
 	} 
		
/*
	input 	: matriks data terboboti dan matriks A+-
	Output 	: matriks D+-
	fungsi	: menghitung matriks D+-
 */	
 public function hitungDPlusMin($mat1, $mat2){
 	$bar1=count($mat1);
   	$kol1=(count($mat1,1)/count($mat1,0))-1;
    $bar2=count($mat2);
//   	$kol2=(count($mat2,1)/count($mat2,0))-1;
	$mDplus = array();
	//$v = array();
	for($i=0;$i<$bar1;$i++){
		$mDplus[$i] = array();
	    $vTB=TopsisOrisinil::ambilBaris($mat1,$i);        
		for($j=0;$j<$bar2;$j++){
			$vA=TopsisOrisinil::ambilBaris($mat2,$j);
			if($i==0) {
				$vkurang=TopsisOrisinil::kurang2Vektor($vA, $vTB);//salah di function kurang2Vektor
				$vk2=TopsisOrisinil::kuadratVektor($vkurang);//salah di function kuadratVektor
				$vjlh=TopsisOrisinil::jlhVektor($vk2);//salah di function jlhVektor
				$mDplus[$i][$j]=sqrt($vjlh);
				}
					else {
					$vkurang=TopsisOrisinil::kurang2Vektor($vA, $vTB);	
					$vk2=TopsisOrisinil::kuadratVektor($vkurang);
					$vjlh=TopsisOrisinil::jlhVektor($vk2);
					$mDplus[$i][$j]=sqrt($vjlh);	
					}
		}	
	}
	
   	return $mDplus;
 	} 	
/*
	input 	: matriks D+-
	Output 	: vektor v
	fungsi	: menghitung vektor v
 */	
 public function hitungV($mat){	
	$bar=count($mat);
   	$kol=(count($mat,1)/count($mat,0))-1;
	$v=array();
	for($i=0;$i<$bar;$i++){
		//for($j=0;$j<$kol;$j++){
			$v[]=$mat[$i][1]/($mat[$i][0]+$mat[$i][1]);
			//}
		}
	return $v;
	}
/*
	input 	: vektor v
	Output 	: matriks berisi nama dan nilai v yang sudah terurut
	fungsi	: menghasilkan urutan nama beserta nilainya  
 */	
 public function hasilAkhir($v, $vNama){	
	//$bar=count($v);
   	$kol=count($v);
   	$vI=TopsisOrisinil::ambilIndeksVektorDesc($v);
	$mAkhir=array();
	//for($i=0;$i<$kol;$i++){
	$iBaru=0;
	foreach($vI as $i){	    
	    $mAkhir[$iBaru]=array();
	    for($j=0;$j<2;$j++){
	    	if($j==0) $mAkhir[$iBaru][$j]=$vNama[$i];
	    	     else $mAkhir[$iBaru][$j]=$v[$i];
	       }
	    $iBaru++;   
	    }
	return $mAkhir;
	}	
	
 /*
	input 	: matriks 
	Output 	: -
	fungsi	: menampilkan matriks
 */	
 public function tampilMatriks($objM){
	//echo "public function tampilObjectMatriks($objM)";
	$nb = count($objM,0);
	$nk = (count($objM,1)/count($objM,0))-1;
	//echo "\$nb : $nb  dan \$nk : $nk <br>";
	for($i=0;$i<$nb;$i++){
	    for($j=0;$j<$nk;$j++){
	        //echo "\$i : $i  dan \$j : $j <br>";		
		printf("%8s",$objM[$i][$j]);
		echo str_repeat("&nbsp;",5); 
		}
	     print "<br>";		
	    }   
	} 
/*
	input 	: vektor v
	Output 	: -
	fungsi	: menampilkan vektor
 */	
 public function tampilVektor($v){
	//echo "public function tampilObjectMatriks($objM)";
	$nb = count($v);
	//$nk = (count($v,1)/count($v,0))-1;;
	//echo "\$nb : $nb  dan \$nk : $nk <br>";
	for($i=0;$i<$nb;$i++){
	    //for($j=0;$j<$nk;$j++){
	        //echo "\$i : $i  dan \$j : $j <br>";		
		printf("%8s",$v[$i]);
		echo str_repeat("&nbsp;",5); 
		//}
	    // print "<br>";		
	    }   
	} 
	
	
 public function __destruct(){ }   

 }
?>
