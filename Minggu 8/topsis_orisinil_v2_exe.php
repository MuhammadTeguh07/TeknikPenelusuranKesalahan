<?php
 
 include "topsis_orisinil_v2.php";
 $topsis1 = new TopsisOrisinil();
 
 $mat=$topsis1->dataTopsis(); // data topsis
 $bar=count($mat);
 $kol=(count($mat,1)/count($mat,0))-1;
 //echo "ubah <br \>";  
 echo "Matriks yang dihasilkan : <br \>";  
 $topsis1->tampilMatriks($mat);
 echo "<br \>";
 
   $v1=$topsis1->pembagiTopsis($mat);
   echo "pembagi  : <br \>";  
   $topsis1->tampilVektor($v1);
   echo "<br \>";
   
   $mat2=$topsis1->ternormalisasiTopsis($mat);
   echo "Matriks ternormalisasi : <br \>";  
   $topsis1->tampilMatriks($mat2);
   echo "<br \>";
   
   echo "ambilKepentingan : <br \>";
   $vkepentingan = $topsis1->ambilKepentingan();  // data kepentingan
   $topsis1->tampilVektor($vkepentingan);
   echo "<br \>";
   
   $mat3=$topsis1->terbobotiTopsis($mat2 ,$vkepentingan);
   echo "Matriks terboboti : <br \>";  
   $topsis1->tampilMatriks($mat3);
   echo "<br \>";
   
   echo "ambilBenefit : <br \>";
   $vBenefit = $topsis1->kriteriaCostBenefit();  // data cost benefit
   $topsis1->tampilVektor($vBenefit);
   echo "<br \>";
  
      
   $mat4=$topsis1->hitungAPlusMin($mat3,$vBenefit);  
   echo "Matriks A+- : <br \>";  
   $topsis1->tampilMatriks($mat4);
   echo "<br \>";  
   
   
   $mat5=$topsis1->hitungDPlusMin($mat3, $mat4);
   echo "Matriks D+- : <br \>";  
   $topsis1->tampilMatriks($mat5);
   echo "<br \>"; 
   echo "<br \>";
   $v=$topsis1->hitungV($mat5);
   echo "hitungV : ";  
   $topsis1->tampilVektor($v);
   echo "<br \>";
   echo "<br \>";
   $vNamaInd = $topsis1->labelBaris();  // data label baris atau calon
   echo "ambilNamaInd : ";
   $topsis1->tampilVektor($vNamaInd);
   echo "<br \>";
   
   echo "<br \>";
   $vI=$topsis1->ambilIndeksVektorDesc($v);
   echo "ambilIndeksVektorDesc : ";  
   $topsis1->tampilVektor($vI);
   echo "<br \>";
   echo "<br \>";
   $mat6=$topsis1->hasilAkhir($v, $vNamaInd);
   echo "Matriks hasilAkhir : <br \>";  
   $topsis1->tampilMatriks($mat6);
   echo "<br \>"; 
   
   
   
   
?>