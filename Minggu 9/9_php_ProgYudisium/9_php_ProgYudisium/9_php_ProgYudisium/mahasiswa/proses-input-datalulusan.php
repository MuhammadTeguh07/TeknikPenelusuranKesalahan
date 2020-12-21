<?php	
session_start();
 include "koneksi.php";
 $nim1=$_SESSION['NIM1'];
 $nim=$nim1;
 if (isset($_REQUEST['simpan'])) {
					//$nim=$_POST['nim'];
					@$nama=$_POST['nama'];
					@$namafak=$_POST['namafak'];
					@$namaprodi=$_POST['namaprodi'];
					@$tgl_diterima=date('Y-m-d', strtotime($_POST['tgl_diterima']));
					@$tglta=date('Y-m-d', strtotime($_POST['tglta']));
					@$ppkmb=$_POST['ppkmb'];
					@$id_kota=$_POST['id_kota'];
					//@$tgl_lahir=$_POST['tgl_lahir'];
					@$tgl_lahir=date('Y-m-d', strtotime($_POST['tgl_lahir']));
					@$agama=$_POST['agama'];
					@$jk=$_POST['jk'];
					@$alamat=$_POST['alamat'];
					//echo $alamat;
					@$no_telp=$_POST['no_telp'];
					@$no_hp=$_POST['no_hp'];
					@$nilaii=$_POST['nilaii'];
					@$email=$_POST['email'];
					@$nama_ortu=$_POST['nama_ortu'];
					@$pekerjaan=$_POST['pekerjaan'];
					@$judul=$_POST['judul'];
					@$dosen3=$_POST['dosen1'];
					@$dosen4=$_POST['dosen2'];
					@$bidang=$_POST['bidang'];
					@$ipk=$_POST['ipk'];
					@$total=$_POST['total'];
					@$skp=$_POST['skp'];
					@$nilai=$_POST['nilai'];
					@$elpt=$_POST['elpt'];
								@$deu = mysql_fetch_array(mysql_query("SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN, PE.TANGGAL_DITERIMA, K.ID_KOTA, M.NO_HP, M.EMAIL
								from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k, pendaftaran pe
								where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND pe.NIM=m.NIM AND m.ID_KOTA=k.ID_KOTA AND M.NIM='$nim'"));
								@$pendf=$deu[11];
								$d3 = "select d.NIP from pendaftaran p, dosen d, detail_dosen_pembimbing dd where d.NIP=dd.NIP AND p.ID_PENDAFTARAN=dd.ID_PENDAFTARAN AND p.ID_PENDAFTARAN='$pendf' AND dd.STATUS_DOSEN_PEMBIMBING='Dosen Pembimbing I'";
								$d2 = mysql_query($d3);
								$dosen1 = mysql_fetch_array($d2);
								$dos1=$dosen1[0];
								$e3 = "select d.NIP from pendaftaran p, dosen d, detail_dosen_pembimbing dd where d.NIP=dd.NIP AND p.ID_PENDAFTARAN=dd.ID_PENDAFTARAN AND p.ID_PENDAFTARAN='$pendf' AND dd.STATUS_DOSEN_PEMBIMBING='Dosen Pembimbing II'";
								$e2 = mysql_query($e3);
								$dosen2 = mysql_fetch_array($e2);
								$dos2=$dosen2[0];
					//@$date2 = date('d-m-Y', strtotime($deu[8]));
					
		if ($elpt >= 400 ) {
			if ($skp >= 75 ) {
				if ($nilai <= 20 ) {
							
							
							mysql_query ("UPDATE `pendaftaran` SET `TANGGAL_DITERIMA`='$tgl_diterima',`NAMA_ORTU`='$nama_ortu',`PEKERJAAN`='$pekerjaan',`JUDUL_TA`='$judul',`TANGGAL_UJIAN_TA`='$tglta',`IPK`='$ipk',`TOTAL_SKS`='110',`SKOR_ELPT`='$elpt',`NILAI_SKP`='$skp',`JUMLAH_SKS_NILAI_D`='$nilaii',`PRESENTASE_NILAI_D`='$nilai',`LULUS_PPKMB`='$ppkmb' WHERE ID_PENDAFTARAN='$pendf'");
							mysql_query ("UPDATE `mahasiswa` SET `JENIS_KELAMIN`='$jk',`AGAMA`='$agama',`ALAMAT_RUMAH`='$alamat',`NO_TELP`='$no_telp',`NO_HP`='$no_hp',`ID_KOTA`='$id_kota',`TGL_LAHIR`='$tgl_lahir',`EMAIL`='$email' WHERE NIM='$nim'");
							
							@$cek1=mysql_num_rows (mysql_query("SELECT status_dosen_pembimbing FROM detail_dosen_pembimbing WHERE NIP = '$dos1' AND status_dosen_pembimbing='Dosen Pembimbing I'"));
							if ($cek1 > 0) {
							mysql_query("UPDATE detail_dosen_pembimbing SET NIP = '$dosen3' WHERE ID_PENDAFTARAN = '$pendf' AND status_dosen_pembimbing='Dosen Pembimbing I'");
							} else{
							mysql_query("INSERT INTO detail_dosen_pembimbing values ('$pendf','$dosen3','Dosen Pembimbing I')");
							}
							@$cek2=mysql_num_rows (mysql_query("SELECT status_dosen_pembimbing FROM detail_dosen_pembimbing WHERE NIP = '$dos2' AND status_dosen_pembimbing='Dosen Pembimbing II'"));
							if ($cek2 > 0) {
							mysql_query("UPDATE detail_dosen_pembimbing SET NIP = '$dosen4' WHERE ID_PENDAFTARAN = '$pendf' AND status_dosen_pembimbing='Dosen Pembimbing II'");
							} else{
							mysql_query("INSERT INTO detail_dosen_pembimbing values ('$pendf','$dosen4','Dosen Pembimbing II')");
							}
							?>
				<script language="JavaScript">
				alert('Data Berhasil Disimpan');
				document.location='datalulusan.php';
			</script>
			<?php
			} else {
				?>
				<script language="JavaScript">
				alert('Nilai D lebih dari 20%');
				document.location='datalulusan.php';
			</script>
			<?php
			}
			} else {
				?>
				<script language="JavaScript">
				alert('Nilai SKP kurang dari 75');
				document.location='datalulusan.php';
			</script>
			<?php
			}
		} else {
			?>
			<script language="JavaScript">
				alert('Skor ELPT kurang dari 400');
				document.location='datalulusan.php';
			</script>
		<?php
		}
							
							}
							
 
							?>