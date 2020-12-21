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

@$validasi=$_REQUEST['validasi'];
@$nim=$_REQUEST['nim'];
$str1=mysql_query("SELECT j.nama_jenis, j.id_jenis, m.NIM, m.NAMA, p.NAMA_PRODI, db.FILE
FROM detail_berkas db, jenis_berkas j, pendaftaran pe, mahasiswa m, bidangilmu b, program_studi p
WHERE J.ID_JENIS=DB.ID_JENIS AND pe.NIM=m.NIM AND m.NIM='$nim' AND j.id_jenis='$validasi' AND m.id_bidangilmu=b.id_bidangilmu AND b.id_prodi=p.id_prodi AND db.ID_PENDAFTARAN=pe.ID_PENDAFTARAN;");
$c=mysql_fetch_array($str1);
								
								
								
								$format = date('d-m-Y', strtotime($c[6]));
								$date1 = date('d-m-Y', strtotime($c[7]));
								$date2 = date('d-m-Y', strtotime($c[17]));
								$date5 = date('d-m-Y', strtotime($c[20]));
?>
  <head>
    <meta charset="utf-8">
    <title><?php echo $c[0];?> </title>
<style>
table{
	border-collapse:collapse;
}	</style>
  </head>
  <body>
									
  
  
  
  
  <br>
  <h4 align="left">NIM : <?php echo $c[2]; ?> </h4>
    <h4 align="left">Nama : <?php echo $c[3]; ?> </h4>
	  <h4 align="left">Nama Berkas : <?php echo $c[0]; ?> </h4>
					
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