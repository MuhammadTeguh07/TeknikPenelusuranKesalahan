<div style="border:0; padding:10px; width:860px; height:400;">
<?php
 session_start();
			$nim1=$_SESSION['NIM1'];
			$nim=$nim1;
			@$cek1=mysql_fetch_array(mysql_query("SELECT NAMA_JENIS, KETERANGAN FROM JENIS_BERKAS WHERE ID_JENIS='b0001'"));
			$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TANGGAL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN
			from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k, pendaftaran pe
			where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND pe.NIM=m.NIM AND m.ID_KOTA=k.ID_KOTA AND M.NIM='$nim'";
			$c2 = mysql_query($c4);
			@$c = mysql_fetch_array($c2);
			$pendf=$c[11];
			
include ("koneksi.php");
	if (isset($_POST['submit'])) {
	$filename= $_FILES["berkas1"]["name"];
	$file_basename= substr($filename, 0, strripos($filename, '.'));
	$file_ext= substr($filename, strripos($filename, '.'));
	$filesize= $_FILES["berkas1"]["size"];
	$allowed_file_types= array('.pdf');
	$baru=$nim;
	
	//validasi data data kosong
	if (empty($filename)) {
		?>
			<script language="JavaScript">
				alert('isi data');
				document.location='berkas.php';
			</script>
		<?php
	}
	else {


	if ($filesize < 500000)
	{	
		$newfilename= $baru . $file_ext;
		if (file_exists("../uploadberkas/" . $newfilename))
		{?>
			<script language="JavaScript">
			alert('Nama File Sama');
			document.location='berkas.php';
			</script>
		<?php
		}
		else
		{		
			
			if ($query_input1) {
	//Jika Sukses
			?>
			<script language="JavaScript">
			alert('done');
			document.location='berkas.php';
			</script>
			<?php
			}
	else {
	//Jika Gagal
			?>
			<script language="JavaScript">
			alert('Input Gagal username sudah ada!');
			document.location='berkas.php';
			</script>
			<?php
	}
		}
	}
	elseif (empty($file_basename))
	{	
		?>
			<script language="JavaScript">
			alert('file kosong');
			document.location='berkas.php';
			</script>
		<?php
	} 
	elseif ($filesize > 500000)
	{	
		// file size error
		?>
			<script language="JavaScript">
			alert('File yang diupload terlalu besar');
			document.location='berkas.php';
			</script>
		<?php
	}
	
	}
}
?>
</div>