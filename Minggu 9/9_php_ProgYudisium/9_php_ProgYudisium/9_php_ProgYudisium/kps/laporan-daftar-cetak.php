<?php 
session_start();
$idpeg=$_SESSION['ID_PEG1'];
$tahun = $_REQUEST['tahun'];
$periode = $_REQUEST['periode'];
//echo $tahun.$periode;
//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='PDF'; //Beri nama file PDF hasil.
define('_MPDF_PATH','../mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', array(230,380)); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();

include ("../koneksi.php");

//$nim=$_REQUEST['nim'];

								
?>
  <head>
    <meta charset="utf-8">
    <title>LAPORAN MAHASISWA MENDAFTAR YUDISIUM</title>	
	<style>
table{
	border-collapse:collapse;
}	</style>
  </head>
  <body>
		<table width="100%"  align="center" >
        <tr>
			<td width="50"></td>
            <td width="100" height="120"> <img src="../images/logo.png" width="110" height="110" /></td>
            
            <td width="500" align="center">
                <p><strong class="header">
                LAPORAN MAHASISWA MENDAFTAR YUDISIUM <br />
                PROGRAM STUDI D3 SISTEM INFORMASI<br />
                UNIVERSITAS AIRLANGGA<br />
                 <span class="headerfooter">Fakultas Vokasi, Kampus B, Surabaya, Telp. 031-5033869, 031-5053156, Fax. 031-5053156
                </span>
                </strong>
            </td>
        
        </tr>
       
    <tr>
        <td colspan="4"><hr style="height:2px; border:none; color:#000"></td>
      </tr>
    <br>
    <br>
    
        
    </table>
      
  
<?php
$d4 = "SELECT D.NAMA_DOSEN, D.NIP
FROM DOSEN D, JABATAN J 
WHERE J.ID_JABATAN=D.ID_JABATAN AND J.NAMA_JABATAN='Wakil Dekan 1'";
$d2 = mysql_query($d4);
$d = mysql_fetch_array($d2);
//$wadek = $d[0];
//echo $wadek;
$c4 = "SELECT D.NAMA_DOSEN, D.NIP
FROM DOSEN D, JABATAN J 
WHERE J.ID_JABATAN=D.ID_JABATAN AND J.NAMA_JABATAN='Koordinator Program Studi'";
$c2 = mysql_query($c4);
$c = mysql_fetch_array($c2);

 ?>
					
					  									<table width="2000" border="1" align="left">
						              <thead >
						                <tr>
											<th>NO.</th>
                                          <th>NIM</th>
						                  <th>NAMA</th>
										  <th>TEMPAT, TANGGAL LAHIR</th>
										  <th>TANGGAL LULUS</th>
										  <th>NOMER HP</th>
										  <th>SKS</th>
										  <th>IPK</th>
											<th>EMAIL</th>
                                            </tr>
						              </thead>
									  <tbody>
						              <?php
									  $no=1;
									  
	$str=mysql_query("select m.NIM, m.NAMA, k.NAMA_KOTA, m.TGL_LAHIR, p.BATAS_AKHIR, ps.NAMA_PRODI, per.nama_periode, pe.TOTAL_SKS, pe.IPK, pe.SKOR_ELPT, pe.NILAI_SKP, pe.LULUS_PPKMB, pe.PRESENTASE_NILAI_D, M.NO_HP, M.EMAIL   
from detail_pelaksanaan dp, pelaksanaan_yudisium p, pendaftaran pe, mahasiswa m, kota k, fakultas f, departemen d, program_studi ps, bidangilmu b, periode per
where dp.ID_PELAKSANAAN=p.ID_PELAKSANAAN and dp.ID_PENDAFTARAN=pe.ID_PENDAFTARAN and f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=ps.ID_DEPARTEMEN AND b.ID_PRODI=ps.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND p.id_periode=per.id_periode and year(dp.TGL_KEPUTUSAN_YUDISIUM)='$tahun' and pe.NIM=m.NIM and per.nama_periode='$periode' and m.ID_KOTA=k.ID_KOTA and dp.STATUS_LULUS='1' order by PE.IPK desc");


while(@$data=mysql_fetch_array($str))
{
				@$date1 = date('d-m-Y', strtotime($data[3]));
				@$date2 = date('d-m-Y', strtotime($data[4]));
echo
"<tr><td><center>".$no.".</center></td><td><center>".$data[0]."</center></td><td>".$data[1]."</td><td>".$data[2].", ".$date1."</td><td><center>".$date2."</center></td><td><center>".$data[13]."</center></td><td><center>".$data[7]."</center></td><td><center>".$data[8]."</center></td><td><center>".$data[14]."</center></td>";
 ?>

<?php echo "</tr>" ;
$no++;
}

?>
									</tbody>
						            </table><br><br>
									<table width="950" border="0">
  <tr>
    <th width="300" scope="col">&nbsp;</th>
    <th width="300" scope="col">&nbsp;</th>
    <th width="200" scope="col">&nbsp;</th>
    <td width="250" scope="col"><label>Surabaya, </label><label><?php $today=date("d-m-Y"); echo $today; ?></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Mengetahui,</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>a.n Dekan</td>
  </tr>
  <tr>
    <td>Koprodi D3 Sistem Informasi</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Wakil Dekan 1</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><?php echo $c[0]; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $d[0]; ?></td>
  </tr>
  <tr>
    <td><label>NIP.</label><label><?php echo "".$c[1].""; ?></label></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>NIP.</label><label><?php echo "".$d[1].""; ?></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
									
									

  </body>
  </html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(($html));
//$mpdf->Output($nama_dokumen.".pdf" ,'I');
$mpdf->Output("laporanyudisium".".PDF","I");
exit;
?>
