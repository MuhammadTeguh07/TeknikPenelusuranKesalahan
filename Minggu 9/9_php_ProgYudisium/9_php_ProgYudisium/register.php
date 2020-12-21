<div style="border:0; padding:10px; width:860px; height:400;">
<?php
include "koneksi.php";
	if (isset($_POST['submit'])) {
	$user= $_POST['user'];
	$pass= md5($_POST['pass']);
	$nama= $_POST['nama'];
	$kota= $_POST['kota'];
	$tgl_lahir= $_POST['tgl_lahir'];
	$tgl=date("Y-m-d",strtotime($tgl_lahir));
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$pekerjaan= $_POST['pekerjaan'];
	$alamat= $_POST['alamat'];
	$telp= $_POST['telp'];
	$filename= $_FILES["gambar"]["name"];
	$file_basename= substr($filename, 0, strripos($filename, '.'));
	$file_ext= substr($filename, strripos($filename, '.'));
	$filesize= $_FILES["gambar"]["size"];
	$allowed_file_types= array('.jpg','.png','.gif','.jpeg','.JPG','.PNG','.GIF','.JPEG');
	$baru=$user;
	 
	//validasi data data kosong
	if (empty($_POST['user'])||empty($_POST['pass'])||empty($_POST['nama'])||empty($_POST['pass'])) {
		?>
			<script language="JavaScript">
				alert('Data Harap Dilengkapi!');
				document.location='index.html';
			</script>
		<?php
	}
	else {
	include "conn.php";
	//cek username di database
	$cek=mysql_num_rows (mysql_query("SELECT nik FROM anggota WHERE nik='$_POST[user]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('Username sudah dipakai!, silahkan ganti username yang lain');
			document.location='index.html';
			</script>
	<?php
	}
	if ($filesize < 500000)
	{	
		$newfilename= $baru . $file_ext;
		if (file_exists("anggota/gambar_anggota/" . $newfilename))
		{?>
			<script language="JavaScript">
			alert('File tersebut sudah ada.');
			document.location='index.html';
			</script>
		<?php
		}
		else
		{		
			move_uploaded_file($_FILES["gambar"]["tmp_name"], "anggota/gambar_anggota/" . $newfilename);
			$tempat="anggota/gambar_anggota/" . $newfilename;
			$input1="INSERT INTO anggota (nik, id_kota, password, nama, tgl_lahir, jenis_kelamin, pekerjaan, alamat, no_hp, gambar, hak_akses)
			VALUES ('$user','$kota','$pass','$nama','$tgl','$jenis_kelamin','$pekerjaan','$alamat','$telp','$newfilename','')";
			$query_input1 =mysql_query($input1);
//Masukan data ke Table login
//$input2="INSERT INTO login(hak_akses, nik, nik_pengurus) VALUES (NULL,'$user',NULL)";
//$query_input2 =mysql_query($input2);
			if ($query_input1) {
	//Jika Sukses
			?>
			<script language="JavaScript">
			alert('Input Data Member Berhasil tunggu kurang dari 24 jam untuk mendapat acc yaa!');
			document.location='index.html';
			</script>
			<?php
			}
	else {
	//Jika Gagal
			?>
			<script language="JavaScript">
			alert('Input Gagal username sudah ada!');
			document.location='index.html';
			</script>
			<?php
	}
		}
	}
	elseif (empty($file_basename))
	{	
		?>
			<script language="JavaScript">
			alert('Tolong pilih gambar yang harus diupload');
			document.location='index.html';
			</script>
		<?php
	} 
	elseif ($filesize > 500000)
	{	
		// file size error
		?>
			<script language="JavaScript">
			alert('File yang diupload terlalu besar');
			document.location='index.html';
			</script>
		<?php
	}
	//else
	//{
		// file type error
		//echo "Hanya file berikut yang bisa diupload: " . implode(', ',$allowed_file_types);
		//unlink($_FILES["gambar"]["tmp_name"]);
	//}
//Masukan data ke Table data member

//Tutup koneksi engine MySQL
	//mysql_close($Open);
	}
}
?>
</div>