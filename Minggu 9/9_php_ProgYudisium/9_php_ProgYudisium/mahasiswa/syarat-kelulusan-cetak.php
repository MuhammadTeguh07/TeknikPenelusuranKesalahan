<?php
session_start();
@$nim1=$_SESSION['NIM1'];
$nim=$nim1;
//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='PDF'; //Beri nama file PDF hasil.
define('_MPDF_PATH','../mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', array(200,230)); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();

include ("../koneksi.php");

//$nim=$_REQUEST['nim'];

								
?>
  <head>
    <meta charset="utf-8">
    <title>Cetak Syarat Kelulusan</title>	
	<style>
table{
	border-collapse:collapse;
}	</style>
  </head>
  <body>

      <br/>
  <h2 align="center">SYARAT KELULUSAN YUDISIUM</h2>
<?php
$data=mysql_fetch_array(mysql_query("SELECT j.nama_jenis, m.NIM, m.NAMA, p.NAMA_PRODI, pe.tanggal_ujian_ta, pe.skor_elpt, pe.nilai_skp, pe.presentase_nilai_d, pe.lulus_ppkmb, pe.ID_PENDAFTARAN
									FROM detail_berkas db, jenis_berkas j, pendaftaran pe, mahasiswa m, bidangilmu b, program_studi p
									WHERE J.ID_JENIS=DB.ID_JENIS AND pe.NIM=m.NIM AND m.NIM='$nim' AND m.id_bidangilmu=b.id_bidangilmu AND b.id_prodi=p.id_prodi;"));
									$pend=$data[9];
										$tgl_ujian = date('d-m-Y', strtotime($data[4]));
 ?>
					<table width="300" border="0" align="center">
					<tr><td><label>Nama</label></td><td>:</td><td><?php echo "".$data[2].""; ?></td></tr>
					<tr><td><label>NIM</label></td><td>:</td><td><label><?php echo "".$data[1].""; ?></label></td></tr>
					<tr><td><label>Program Studi</label></td><td>:</td><td> <label><?php echo "".$data[3].""; ?></label></td></tr>
					<tr><td><label>Tanggal Ujian</label></td><td>:</td><td> <label><?php echo "".$tgl_ujian.""; ?></label></td></tr>
					</table><br>
					  									<table width="641" border="1" align="center">
						              <thead >
						                <tr >
						                  <th>NO.</th>
										  <th >NAMA BERKAS</th>
						                  <th>STATUS VALIDASI</th>
										  
										  
						                </tr>
						              </thead>
									  <tbody>
						              <?php
									  $no=1;
$str=mysql_query("SELECT j.nama_jenis, db.status_validasi, j.id_jenis 
FROM detail_berkas db, jenis_berkas j
WHERE J.ID_JENIS=DB.ID_JENIS AND ID_PENDAFTARAN='$pend';");
while($data=mysql_fetch_array($str))
{
echo
"<tr><td>".$no.".</td>
<td>".$data[0]."</td>"; 
if($data[1]==1){
	$ok='hidden';
	$message="Sudah Divalidasi";
} else {
	$ok='';
	$message='';
}
?>
<?php echo "<td>";
 if ($data[1]=='0') {
	echo "Belum Divalidasi";
} else {
	echo "Sudah Divalidasi";
} "</td>"; ?>


<?php echo "</tr>" ;
$no++;
}
?>
									</tbody>
						            </table>
									
									

  </body>
  </html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Disini dimulai proses convert UTF-8, kalau ingin ISO-8859-1 cukup dengan mengganti $mpdf->WriteHTML($html);
$mpdf->WriteHTML(($html));
//$mpdf->Output($nama_dokumen.".pdf" ,'I');
$mpdf->Output("syaratkelulusan".".PDF","I");
exit;
?>