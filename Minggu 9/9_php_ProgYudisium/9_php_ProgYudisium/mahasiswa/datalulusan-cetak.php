<?php
session_start();

//memulai menggunakan mpdf
// Tentukan path yang tepat ke mPDF
$nama_dokumen='PDF'; //Beri nama file PDF hasil.
define('_MPDF_PATH','../mpdf/'); // Tentukan folder dimana anda menyimpan folder mpdf
include(_MPDF_PATH . "mpdf.php"); // Arahkan ke file mpdf.php didalam folder mpdf
$mpdf=new mPDF('utf-8', array(200,315)); // Membuat file mpdf baru
 
//Memulai proses untuk menyimpan variabel php dan html
ob_start();

include ("../koneksi.php");

$nim=$_REQUEST['nim'];

								$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN, PE.TANGGAL_DITERIMA, K.ID_KOTA, M.NO_HP, M.EMAIL
							from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k, pendaftaran pe
							where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND pe.NIM=m.NIM AND m.ID_KOTA=k.ID_KOTA AND M.NIM='$nim'";
							$c2 = mysql_query($c4);
							$c = mysql_fetch_array($c2);
							$pendf=$c[11];
							//$nim=$c[0];
							$nama=$c[1];
							$kota=$c[2];
							$fakultas=$c[4];
							$prodi=$c[5];
							$bidang=$c[6];
							$jk=$c[7];
							$alamat=$c[8];
							$notelp=$c[9];
							$format = date('m/d/Y', strtotime($c[3]));
							@$date1 = date('m/d/Y', strtotime($c[12]));
							$nohp=$c[14];
							$email=$c[15];
								
								$deu4 = "SELECT P.ID_PENDAFTARAN, P.TANGGAL_DITERIMA, M.AGAMA, P.NAMA_ORTU, P.PEKERJAAN, P.JUDUL_TA, P.IPK, P.TOTAL_SKS,  P.TGL_DAFTAR, P.SKOR_ELPT, P.PRESENTASE_NILAI_D, P.NILAI_SKP, P.TANGGAL_UJIAN_TA, P.LULUS_PPKMB, P.JUMLAH_SKS_NILAI_D 
								FROM PENDAFTARAN P, MAHASISWA M WHERE M.NIM=P.NIM AND P.ID_PENDAFTARAN='$pendf'";
								@$deu2 = mysql_query($deu4);
								@$deu = mysql_fetch_array($deu2);
								$ppkmb = $deu[13];
								$tgldit = date('m/d/Y', strtotime($deu[1]));
								$tglta = date('m/d/Y', strtotime($deu[12]));
								@$date2 = date('d-m-Y', strtotime($deu[8]));
								//$date5 = date('d-m-Y', strtotime($c[20]));
								
								
								
								$d3 = "select d.NAMA_DOSEN, d.NIP from pendaftaran p, dosen d, detail_dosen_pembimbing dd where d.NIP=dd.NIP AND p.ID_PENDAFTARAN=dd.ID_PENDAFTARAN AND p.ID_PENDAFTARAN='$pendf' AND dd.STATUS_DOSEN_PEMBIMBING='Dosen Pembimbing I'";
								$d2 = mysql_query($d3);
								$dosen1 = mysql_fetch_array($d2);
								//$dosen11=$dosen1[0];
								//$dosbim1=$dosen1[1];
								$e3 = "select d.NAMA_DOSEN, d.NIP from pendaftaran p, dosen d, detail_dosen_pembimbing dd where d.NIP=dd.NIP AND p.ID_PENDAFTARAN=dd.ID_PENDAFTARAN AND p.ID_PENDAFTARAN='$pendf' AND dd.STATUS_DOSEN_PEMBIMBING='Dosen Pembimbing II'";
								$e2 = mysql_query($e3);
								$dosen2 = mysql_fetch_array($e2);
								$dosen22=$dosen2[0];
								
								
								//$format = date('d-m-Y', strtotime($c[6]));
								//$date1 = date('d-m-Y', strtotime($c[7]));
								//$date2 = date('d-m-Y', strtotime($c[17]));
								//$date5 = date('d-m-Y', strtotime($c[20]));
?>
  <head>
    <meta charset="utf-8">
    <title>Cetak Data Lulusan</title>	
	<style>
table{
	border-collapse:collapse;
}	</style>
  </head>
  <body>

      <br/>
  <h2 align="center">FORMULIR DATA LULUSAN</h2>
  <h2 align="center">Fakultas <STRONG><?php echo $c[4]; ?></STRONG></h2>
  <h2 align="center">Universitas Airlangga</h2>
					<table width="641" border="1" align="center">
					<tr><td>1.</td><td><label>NIM</label></td><td><label><?php echo "".$c[0].""; ?></label></td></tr>
					<tr><td>2.</td><td><label>Nama Lengkap</label></td><td><label><?php echo "".$c[1].""; ?></label></td></tr>
					<tr><td>3.</td><td><label>Fakultas</label></td><td> <label><?php echo "".$c[4].""; ?></label></td></tr>
					<tr><td>4.</td><td><label>Program Studi</label></td><td> <label><?php echo "".$c[5].""; ?></label></td></tr>
					<tr><td>5.</td><td><label>Diterima di Unair</label></td><td> <label><?php echo "".$date1.""; ?></label></td></tr>
					<tr><td>6.</td><td><label>Tempat Lahir</label></td><td> <label><?php echo "".$c[2].""; ?></label></td></tr>
					<tr><td>7.</td><td><label>Tanggal Lahir</label></td><td> <label><?php echo "".$format.""; ?></label></td></tr>
					<tr><td>8.</td><td><label>Agama</label></td><td> <label><?php echo "".$deu[2].""; ?></label></td></tr>
					<tr><td>9.</td><td><label>Jenis Kelamin</label></td><td> <label><?php if ($c[7]=='L') { echo "Laki-laki"; } else if ($c[7]=='P') { echo "Perempuan"; } ?></label></td></tr>
					<tr><td>10.</td><td><label>Alamat Rumah</label></td><td> <label><?php echo "".$c[8].""; ?></label></td></tr>
					<tr><td>11.</td><td><label>No. Telp </label></td><td> <label><?php echo "".$c[9].""; ?></label></td></tr>
					<tr><td>12.</td><td><label>Nama Orang Tua</label></td><td> <label><?php echo "".$deu[3].""; ?></label></td></tr>
					<tr><td>13.</td><td><label>Pekerjaan Orang Tua</label></td><td> <label><?php echo "".$deu[4].""; ?></label></td></tr>
					<tr><td>14.</td><td><label>Judul Tugas Akhir</label></td><td> <label><?php echo "".$deu[5].""; ?></label></td></tr>
					<tr><td>15.</td><td><label>Dosen Pembimbing I</label></td><td> <label><?php echo "".$dosen1[0].""; ?></label></td></tr>
					<tr><td>16.</td><td><label>Dosen Pembimbing II</label></td><td> <label><?php echo "".$dosen22.""; ?></label></td></tr>
					<tr><td>17.</td><td><label>Bidang Ilmu</label></td><td> <label><?php echo "".$c[6].""; ?></label></td></tr>
					<tr><td>18.</td><td><label>IPK</label></td><td> <label><?php echo "".$deu[6].""; ?></label></td></tr>
					<tr><td>19.</td><td><label>Total SKS</label></td><td> <label><?php echo "".$deu[7].""; ?></label></td></tr>
                    <tr><td>20.</td><td><label>Skor ELPT </label></td><td> <label><?php echo "".$deu[9].""; ?></label></td></tr>
						            </table><br><br><br><br>
									<table width="470" height="196" border="0">
									<tr>
									<td rowspan="5"><img src="<?php echo "../fotod3si/".$c[10];?>" height="200" width="150" border="3" ><td rowspan="3"></td><td rowspan="3"></td></td>
									<td>&nbsp;</td>
									<td><label>Surabaya, </label><label><?php $today=date("d-m-Y"); echo $today; ?></label></td>
									</tr>
									<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									</tr>
									<tr>
									<td>&nbsp;</td>
									<td><label>NIM.</label><label><?php echo "".$c[0].""; ?></label></td>
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
$mpdf->Output("datalulusan".".PDF","I");
exit;
?>