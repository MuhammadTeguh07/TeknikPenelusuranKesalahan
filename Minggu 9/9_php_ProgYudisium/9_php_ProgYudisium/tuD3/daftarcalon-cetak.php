<?php
session_start();

//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='PDF'; //Beri nama file PDF hasil.
define('_MPDF_PATH','../mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', array(220,315)); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();

include ("../koneksi.php");

$laporan=$_REQUEST['laporan'];

$str1=mysql_query("SELECT count(m.NIM), peg.NAMA_PEG from pegawai peg, MAHASISWA M, bidangilmu b, program_studi p, detail_pelaksanaan dp, pelaksanaan_yudisium py where m.NIM=dp.NIM AND dp.ID_PELAKSANAAN=py.ID_PELAKSANAAN AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND peg.ID_PEG=py.ID_PEG AND p.ID_PRODI=b.ID_PRODI AND  py.TAHUN_PELAKSANAAN='$laporan'");
$c=mysql_fetch_array($str1);
								
								
								
								$format = date('d-m-Y', strtotime($c[6]));
								$date1 = date('d-m-Y', strtotime($c[7]));
								$date2 = date('d-m-Y', strtotime($c[17]));
								$date5 = date('d-m-Y', strtotime($c[20]));
?>
  <head>
    <meta charset="utf-8">
    <title>Cetak Daftar Calon Yudisium</title>
<style>
table{
	border-collapse:collapse;
}	</style>
  </head>
  <body>
									<table width="700" height="196" border="0">
									<tr>
									<td rowspan="4"><img src="upload/logo.png" alt="260x180" style="width: 80px; height: 80px;"></td>
									<td>&nbsp;</td>
									<td><h2 align="center">Daftar Calon Mahasiswa Yudisium  </h2><label></label></td>
									</tr>
									<tr>
									<td>&nbsp;</td>
									<td><h2 align="center">Program Studi D3 Sistem Informasi</STRONG></h2></td>
									</tr>
									<tr>
									<td>&nbsp;</td>
									<td><h2 align="center">Tahun Ajaran <?php echo $laporan; ?> </h2></td>
									<tr>
									<td>&nbsp;</td>
									<td><h2 align="center">Universitas Airlangga</h2></td>
									</tr>
									</table>
      <br/>
  
  
  
  
  <br>
  <h4 align="right">Jumlah : <?php echo $c[0]; ?> </h4>
					<table width="700"  border="1" align="center">
						              <thead>
						                <tr>
						                  <th>NIM</th>
						                  <th>Nama Lengkap</th>
										  <th>Program Studi</th>
										  <th>Total SKS</th>
										  <th>Nilai IPK</th>
										  <th>Nilai TOEFL</th>
										  
						                </tr>
						              </thead>
						              <?php
				
				
$str=mysql_query("SELECT M.NIM,M.NAMA, P.NAMA_PRODI, M.TOTAL_SKS, M.IPK, M.SKOR_ELPT from MAHASISWA M, bidangilmu b, program_studi p, detail_pelaksanaan dp, pelaksanaan_yudisium py where m.NIM=dp.NIM AND dp.ID_PELAKSANAAN=py.ID_PELAKSANAAN AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND p.ID_PRODI=b.ID_PRODI AND py.TAHUN_PELAKSANAAN='$laporan' group by m.NIM asc");
while($data=mysql_fetch_array($str))
{
echo
"<tbody><tr><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2]."</td><td>".$data[3]."</td><td>".$data[4]."</td><td>".$data[5]."</td></tr></tbody>" ;
}
				
?>
</form>
						            </table>
							<h4 align="right">Surabaya, <?php $today=date("d-m-Y"); echo $today; ?> </h4>	
							<br><br><br>
							<h4 align="right"><?php echo $c[1]; ?> </h4>
  </body>
  </html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(($html));
//$mpdf->Output($nama_dokumen.".pdf" ,'I');
$mpdf->Output("studio","I");;
exit;
?>