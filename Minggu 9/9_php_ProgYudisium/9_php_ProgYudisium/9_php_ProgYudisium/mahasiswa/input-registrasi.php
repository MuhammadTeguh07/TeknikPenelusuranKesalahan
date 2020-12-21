<?php	
session_start();
 include "koneksi.php";
 $nim1=$_SESSION['NIM1'];
 $nim=$nim1;
 date_default_timezone_set("Asia/Jakarta");
	@$today=date("m/d/Y");
												@$pass1=$_REQUEST['pass1'];
												@$pass2=$_REQUEST['pass2'];
												//@$id_kota=$_REQUEST['id_kota'];
												//@$tgl_lahir=$_REQUEST['tgl_lahir'];
												@$alamat=$_REQUEST['alamat'];
												//@$jk=$_REQUEST['jk'];
												//@$agama=$_REQUEST['agama'];
												@$no_telp=$_REQUEST['no_telp'];
												@$no_hp=$_REQUEST['no_hp'];
												@$email=$_REQUEST['email'];
												//@$foto=$_FILES["file"]["name"];
												$filename= $_FILES["file"]["name"];
												$file_basename= substr($filename, 0, strripos($filename, '.'));
												$file_ext= substr($filename, strripos($filename, '.'));
												$filesize= $_FILES["file"]["size"];
												$allowed_file_types= array('.jpg','.png','.gif','.jpeg','.JPG','.PNG','.GIF','.JPEG');
												@$date2=date("Ymdhis");
												//@$format = date('Y-m-d', strtotime($tgl_lahir));
												$pend="IDPEND".$date2;
												//echo $pend;
												
								$a1 = "SELECT MAX(ID_DETAIL_PELAKSANAAN) FROM detail_pelaksanaan";
								$b1 = mysql_query($a1);
								$c1 = mysql_fetch_array($b1);
								list($maks) = mysql_fetch_row($b1);
								$max = $c1[0];
								$detail = substr($max, 2, 4);
								$detail = $detail + 1;
								if($detail <= 9) $detail = "DP000".$detail;
								if($detail <= 99 && $detail > 9) $detail = "DP00".$detail;
								if($detail <= 999 && $detail > 99) $detail = "DP0".$detail;
								if($detail <= 9999 && $detail > 999) $detail = "DP".$detail;
										
							if(isset($_POST['submit']))
							{
								if($pass1==$pass2){
									if ($filesize > 500000) {
										echo "<script>alert('Foto yang diupload terlalu besar')</script>";
										echo "<meta http-equiv=\"Refresh\"content=\"0.5;URL=registrasi.php\">";
									} else if ($filesize < 500000){
							echo "<script>alert('Data Berhasil Disimpan');</script>";
							move_uploaded_file($_FILES['file']['tmp_name'], "../fotod3si/".$_FILES['file']['name']);
							mysql_query("UPDATE `mahasiswa` SET PASSWORD='$pass2',ALAMAT_RUMAH='$alamat',NO_TELP='$no_telp',NO_HP='$no_hp',FOTO='$filename',EMAIL='$email' WHERE NIM = '$nim';");
								mysql_query("INSERT INTO `pendaftaran`(ID_PENDAFTARAN, NIM, STATUS_MHS, TGL_DAFTAR, TOTAL_SKS) VALUES ('$pend','$nim','0',CURRENT_TIMESTAMP,'110')");
								@$countdown = mysql_fetch_array(mysql_query("SELECT sum(day(p.BATAS_AKHIR)-day(CURRENT_DATE)) as countdown, NAMA_PELAKSANAAN, ID_PELAKSANAAN, BATAS_AWAL, BATAS_AKHIR FROM pelaksanaan_yudisium p WHERE (BATAS_AWAL<CURRENT_DATE or BATAS_AWAL=CURRENT_DATE) and (BATAS_AKHIR>CURRENT_DATE or BATAS_AKHIR=CURRENT_DATE)"));
									$period = $countdown[2];
									//$dftr = $ceklulus[1];
									$date2=date('Y-m-d');
								@$tambah = mysql_query ("INSERT INTO `detail_pelaksanaan`(`ID_PELAKSANAAN`, `ID_PENDAFTARAN`, `TGL_KEPUTUSAN_YUDISIUM`, `STATUS_LULUS`, `ID_DETAIL_PELAKSANAAN`) VALUES ('$period','$pend','$date2','0', '$detail')");
							echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=index.php\">");	
									}
								}  else { 
									echo "<script>alert('konfirmasi password baru salah')</script>";
									echo "<meta http-equiv=\"Refresh\"content=\"0.5;URL=registrasi.php\">";
								}
									
							}
							else {
								echo "<script>alert('Lengkapi Data Terlebih Dahulu');</script>";
								echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=registrasi.php\">");
							}
								
							?>