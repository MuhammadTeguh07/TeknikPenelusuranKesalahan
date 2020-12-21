<?php 
session_start();
 include "koneksi.php";
 @$idpeg=$_SESSION['ID_PEG1'];
									
 if (isset($_REQUEST['submit'])){
@$nim=$_POST['nim'];
echo $nim;
@$nama=$_POST['nama'];
@$id_prodi=$_REQUEST['id_prodi'];
@$id_kota=$_REQUEST['id_kota'];
@$tgl_lahir=$_REQUEST['tgl_lahir'];
@$jk=$_REQUEST['jk'];

echo "UPDATE `mahasiswa` SET `ID_KOTA`='$id_kota',`NAMA`='$nama',`JENIS_KELAMIN`='$jk',`TGL_LAHIR`='$tgl_lahir' WHERE NIM='$nim'";
//echo "<script>alert('Data Berhasil Diubah');</script>";
//echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=datamaster-mahasiswa.php\">");
}
else
			{	  
	  echo "<script>alert('Data yang dimasukkan gagal');</script>";
				echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=datamaster-mahasiswa.php\">");
			}
											?>