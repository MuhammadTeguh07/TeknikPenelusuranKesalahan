<!DOCTYPE html>

<?php 
session_start();
include ("koneksi.php");
$nim1=$_SESSION['NIM1'];
$nim=$nim1;
						
 if (isset($_SESSION['NIM1'])){
	date_default_timezone_set("Asia/Jakarta");
	$date2=date("Ymdhis");
							
							$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN, PE.TANGGAL_DITERIMA, K.ID_KOTA, M.NO_HP, M.EMAIL
							from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k, pendaftaran pe
							where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND pe.NIM=m.NIM AND m.ID_KOTA=k.ID_KOTA AND M.NIM='$nim'";
							$c2 = mysql_query($c4);
							$c = mysql_fetch_array($c2);
							$pendf=$c[11];
							$nim=$c[0];
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

							
								
?>
<html class="no-js">
    
    <head>
        <title>Pendaftaran Yudisium</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
					
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
					<img class="brand" src="../images/logo.png" alt="260x180" style="width: 80px; height: 80px;" >
                    <a class="brand" href="#">Pendaftaran Yudisium <br>D3 Sistem Informasi<br></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $c[1]; ?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="profil.php">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li>
                                <a href="index.php">HOME</a>
                            </li>
                            
                            <li class="active">
                                <a href="datalulusan.php">Pendaftaran Yudisium

                                </a>
                            </li>
							<li>
                                <a href="berkas.php">Upload Berkas Persyaratan Yudisium
                                </a>
                            </li>
							<li class="dropdown">
                                <a href="../login.php">Logout
                                </a>
                            </li>
                        </ul>
                            
                    </div>
                    <!--/.nav-collapse -->
                </div>
				
				
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                
                <!--/span-->
								<div class="span2" id="content">
				</DIV>
                <div class="span9" id="content">
                    <div class="row-fluid">
                        	
                    	</div>
                    <div class="row-fluid">
                        <!-- block -->
                        
                        <!-- /block -->
                    </div>
                    
					<div class="row-fluid">
                        <!-- block -->
						
                        <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Data Lulusan Mahasiswa</div>
                            </div>
							<?php
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
								
								
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
  													<div class="col-lg-12">
													<form class="form-horizontal" method="POST" action="proses-input-datalulusan.php" enctype="multipart/form-data">
													<!-- <table border="1">
			

			<tr>
				<th>1</th>
				
				<th>@<input type="number" name="jumlah_algoritma" id="harga_algoritma" size="7"  value="0" onkeyup="totalan()"></th>
				<th>@<input type="text" name="total_jumlah" id="total"  maxlength="4" value="" readonly > %</th>
			</tr>
		</table>
		<br><br> -->
		
                                     
                                      <fieldset>
                                        <legend align="center">Data Lulusan Mahasiswa</legend>
										
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">NIM</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nim" value="<?php echo $nim; ?>" data-provide="typeahead" data-items="4"  placeholder="NIM" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Nama Lengkap </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nama" value="<?php echo $nama; ?>" data-provide="typeahead" data-items="4" placeholder="Nama Lengkap" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Fakultas</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="namafak" value="<?php echo $fakultas; ?>" data-provide="typeahead" data-items="4" placeholder="Fakultas" disabled>
                                          </div>
										  </div>
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">Program Studi</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="namaprodi" value="<?php echo $prodi; ?>" data-provide="typeahead" data-items="4" placeholder="Program Studi" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="date01">Diterima Di Unair</label>
                                          <div class="controls">
                                            <input type="text" class="span6 input-xlarge datepicker" name="tgl_diterima" id="date01" value="<?php echo $tgldit; ?>" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="date01">Tanggal Ujian TA</label>
                                          <div class="controls">
                                            <input type="text" class="span6 input-xlarge datepicker" name="tglta" id="date01" value="<?php echo $tglta; ?>" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" >Lulus PPKMB</label>
                                          <div class="controls" required>
										  <label>
                                              <input type="radio" value="1" name="ppkmb" <?php if($ppkmb==1){ echo "checked";} else { echo "";} ?>>
                                              Lulus
                                            </label>
                                            <label>
                                              <input type="radio" value="0" name="ppkmb" <?php if($ppkmb==0){ echo "checked";} else { echo "";} ?> >
                                              Tidak Lulus
                                            </label>
											
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Tempat Lahir</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="id_kota" value="<?php echo $c[2]; ?>" data-provide="typeahead" data-items="4" placeholder="Program Studi" disabled>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="date01">Tanggal Lahir</label>
                                          <div class="controls">
                                            <input type="text" class="span6 input-xlarge datepicker" name="tgl_lahir" id="date01" value="<?php echo $format; ?>" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Agama</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="agama" value="<?php echo $deu[2]; ?>" data-provide="typeahead" data-items="4" placeholder="Agama" disabled>
                                          </div>
                                        </div>	
										
										<div class="control-group">
                                          <label class="control-label" >Jenis Kelamin</label>
                                          <div class="controls" required>
                                            <label>
                                              <input type="radio" value="L" name="jk" <?php if($jk=="L"){ echo "checked";} else { echo "";} ?> disabled >
                                              Laki-laki
                                            </label>
											<label>
                                              <input type="radio" value="P" name="jk" <?php if($jk=="P"){ echo "checked";} else { echo "";} ?> disabled>
                                             Perempuan
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Alamat </label>
                                          <div class="controls">
                                            <textarea type="text" class="span6" rows="2" id="typeahead" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat" required><?php echo $alamat; ?></textarea>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No. Telp. </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="no_telp" onkeypress='validate(event)' value="<?php echo $notelp; ?>" data-provide="typeahead" data-items="4" placeholder="No Telp" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No. Hp</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="no_hp" onkeypress='validate(event)' value="<?php echo $nohp; ?>" data-provide="typeahead" data-items="4" placeholder="No Telp" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="email"  value="<?php echo $email; ?>" data-provide="typeahead" data-items="4" placeholder="Email" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Nama Orang Tua</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nama_ortu" value="<?php echo $deu[3]; ?>" data-provide="typeahead" data-items="4" placeholder="Nama Orang Tua" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Pekerjaan Orang Tua</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="pekerjaan" value="<?php echo $deu[4]; ?>" data-provide="typeahead" data-items="4" placeholder="Pekerjaan Orang Tua" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Judul Tugas Akhir</label>
                                          <div class="controls">
                                            <textarea type="text" class="span6" rows="3" id="typeahead" name="judul" value="<?php echo $deu[5]; ?>" placeholder="Judul Tugas Akhir" required><?php echo $deu[5]; ?></textarea>
                                          </div>
                                        </div>
										<div class="control-group">
										<label class="control-label" for="select01" >Dosen Pembimbing I</label>
										<div class="controls"]>
										
										<select name="dosen1" id="select01" class="span6 chzn-select" required>
										<option value=""> Pilih Dosen Pembimbing I</option>
										<?php
										$sql = mysql_query("SELECT * from dosen") or die (mysql_error());
			
										while ($array1=mysql_fetch_array($sql))
										{ 
										if($dosen1[1]==$array1[0]){ ?>
										<option value="<?php echo $array1["NIP"]; ?>" selected><?php echo $array1["NAMA_DOSEN"]; ?></option>
										<?php  
										} else {
										?>
										<option value="<?php echo $array1["NIP"]?>"> <?php echo $array1["NAMA_DOSEN"] ?></option>
										<?php
										}
										} ?>
										</select>
										</div></div>
										<div class="control-group">
										<label class="control-label" for="select01" >Dosen Pembimbing II</label>
										<div class="controls"]>
										
										<select name="dosen2" id="select01" class="span6 chzn-select" required>
										<option value=""> Pilih Dosen Pembimbing II</option>
										<?php
										$sql = mysql_query("SELECT * from dosen") or die (mysql_error());
			
										while ($array2=mysql_fetch_array($sql))
										{ 
										if($dosen2[1]==$array2[0]){ ?>
										<option value="<?php echo $array2["NIP"]; ?>" selected><?php echo $array2["NAMA_DOSEN"]; ?></option>
										<?php  
										} else {
										?>
										<option value="<?php echo $array2["NIP"]?>"> <?php echo $array2["NAMA_DOSEN"] ?></option>
										<?php
										}
										} ?>
										</select>
										</div></div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Bidang Ilmu</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="bidang" value="<?php echo $bidang; ?>" data-provide=typeahead" data-items="4"  placeholder="Bidang Ilmu" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">IPK</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="ipk" maxlength="5" value="<?php echo $deu[6]; ?>" data-provide="typeahead" data-items="4" placeholder="IPK" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Total SKS</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="totalala" value="<?php echo $deu[7]; ?>"  onkeypress='validate(event)' data-provide="typeahead" data-items="4" maxlength="3" placeholder="Total SKS" required disabled>
                                          </div>
                                        </div>
										<div class="control-group" id="control2">
                                          <label class="control-label" for="typeahead">Nilai SKP</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="skp" maxlength="4" onkeyup="checkskp(); return false;" name="skp" onkeypress='validate(event)' value="<?php echo $deu[11]; ?>" maxlength="4"data-provide="typeahead" data-items="4" placeholder="Nilai SKP" required>
											<span id="confirmMessageskp" class="confirmMessage"></span>
										  <i class="icon-ok hidden" id="centangskp"></i>
                                          </div>
                                        </div>
										
										<div class="control-group" id="control3">
                                          <label class="control-label" for="typeahead">Jumlah SKS Nilai D</label>
                                          <div class="controls">
                                            <!-- 
											ini ngisi jumlahnya
											nama id nya nilaid
											onkeyup antara jumlah sama persentase nya sama namanya totalan();
											gapake onkeypress yah
										    -->
										  <input type="text" onkeypress='validate(event)' maxlength="2" placeholder="Jumlah SKS Nilai D" class="span3" value="<?php echo $deu[14]; ?>" name="nilaii" id="nilaid" size="7"  value="0" onkeyup="totalan(); return false;" required > 
											<!-- 
											ini yg otomatis ngisi
											nama id nya totally
										    -->
                                            Persentase <input type="text" class="span2" name="nilai" id="totally" value="<?php echo $deu[10]; ?>" maxlength="4" value="" readonly onkeyup="totalan(); return false;" maxlength="3" > %
										  <span id="confirmMessage2" class="confirmMessage"></span>
										  <i class="icon-ok hidden" id="centang2"></i>
										  </div>
                                        </div>
										<div class="control-group" id="control1">
                                          <label class="control-label" for="typeahead">Skor ELPT</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="elpt" maxlength="3" onkeyup="checkelpt(); return false;" name="elpt" onkeypress='validate(event)' placeholder="Skor ELPT" value="<?php echo $deu[9]; ?>" data-provide="typeahead"  data-items="4"  required>
										  <span id="confirmMessage" class="confirmMessage"></span>
										  <i class="icon-ok hidden" id="centang"></i>
										  </div>
                                        </div>
										
										
                                       <div class="form-actions">
                                          <a href="datalulusan-cetak.php?nim=<?php echo $nim; ?>" class="btn btn-info" target="_blank"><i class="icon-print"></i> Cetak</a>
										  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                          
										  </div>
                                    </form>

									
                                </div>	
									
							</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                        <!-- /block -->
                    </div>
                    <div class="row-fluid">
                        <!-- block -->
                        
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <footer>
                <p>Pendaftaran Yudisium D3 Sistem Informasi</p>
            </footer>
        </div>
        <!--/.fluid-container-->
		
        <link href="../vendors/datepicker.css" rel="stylesheet" media="screen">
		
        <link href="../vendors/uniform.default.css" rel="stylesheet" media="screen">
		
        <link href="../vendors/chosen.min.css" rel="stylesheet" media="screen">
		 <link href="../vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="../vendors/jquery-1.9.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/scripts.js"></script>
        <script src="../vendors/jquery.uniform.min.js"></script>
        <script src="../vendors/chosen.jquery.min.js"></script>
        <script src="../vendors/bootstrap-datepicker.js"></script>
		<script src="../vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="../vendors/wysiwyg/bootstrap-wysihtml5.js"></script>
        <script src="../vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
		<script type="text/javascript" src="../vendors/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="../assets/form-validation.js"></script>
		<script src="../vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/scripts.js"></script>
		<script src="../assets/DT_bootstrap.js"></script>
		
		<script>
function checkskp()
    {
        //Store the password field objects into variables ...
        var control2 = document.getElementById('control2');
        var skp = document.getElementById('skp');
		var c1 = document.getElementById('centangskp');
        //Store the Confimation Message Object ...
        var message1 = document.getElementById('confirmMessageskp');
        //Set the colors we will be using ...
        var goodColor1 = "#66cc66";
        var badColor1 = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if(skp.value >= 75){
			if (skp.value > 4000){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            //pass2.style.backgroundColor = goodColor;
            message1.style.color = badColor1;
            message1.innerHTML = "SKP Maksimal 4000!"
			c1.className="icon-remove"
			control2.className="control-group error"
        } else if (skp.value <= 4000){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            //pass2.style.backgroundColor = goodColor;
            message1.style.color = goodColor1;
            message1.innerHTML = "Nilai SKP lebih dari 75!"
			c1.className="icon-ok"
			control2.className="control-group success"
			
        }
		} else if (skp.value < 75 ) {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            //pass2.style.backgroundColor = badColor;
            message1.style.color = badColor1;
            message1.innerHTML = "SKP kurang dari 75!"
			c1.className="icon-remove"
			control2.className="control-group error"
        } else {
			
			message2.style.color = badColor2;
			message2.innerHTML = "Harus Diisi!"
			c1.className="icon-remove"
			control3.className="control-group error"
			
			
		}
    }  
										</script>
										<!-- 
											ini classnya namanya totalan()
										    -->
		<script>
		function totalan() {
		var nilaid = (document.getElementById("nilaid").value); //deklarasiin ke javascript dulu
		var jumlah = (nilaid / 110) * 100 ; //buat penjumlahannya
		var potong = jumlah.toPrecision(3); //kalo ini nampilin 3 digit di belakang koma
		document.getElementById('totally').value = potong; //trus ditampilin ke id totally
		//function totalan() itu ajasih yg perlu yg bawah ini jangan dihiraukan wkwk
		var control3 = document.getElementById('control3');
        //var nilai = document.getElementById('nilai');
		var c2 = document.getElementById('centang2');
        //Store the Confimation Message Object ...
        var message2 = document.getElementById('confirmMessage2');
        //Set the colors we will be using ...
        var goodColor2 = "#66cc66";
        var badColor2 = "#ff6666";
      
        if(totally.value >= 0){
			if (totally.value > 20){
            
            message2.style.color = badColor2;
            message2.innerHTML = "Persentase Lebih Dari 20%"
			c2.className="icon-remove"
			control3.className="control-group error"
        } else if (totally.value <= 20){
            
            message2.style.color = goodColor2;
            message2.innerHTML = "Persentase Nilai D Kurang Dari 20%!"
			c2.className="icon-ok"
			control3.className="control-group success"
			
        }
		} else if (totally.value < 0 ) {
            
            message2.style.color = badColor2;
            message2.innerHTML = "Harus Diisi!"
			c2.className="icon-remove"
			control3.className="control-group error"
        } else {
			message2.innerHTML = "Tidak Sesuai!"
			message2.style.color = badColor2;
			c2.className="icon-remove"
			control3.className="control-group error"
			
			
		}
		}
		
		</script>
		
		
		<script>
										function checkelpt()
    {
        //Store the password field objects into variables ...
        var control1 = document.getElementById('control1');
        var elpt = document.getElementById('elpt');
		var c = document.getElementById('centang');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if(elpt.value >= 400){
			if (elpt.value > 676){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            //pass2.style.backgroundColor = goodColor;
            message.style.color = badColor;
            message.innerHTML = "Lebih dari Standart Skor ELPT!"
			c.className="icon-remove"
			control1.className="control-group error"
        } else if (elpt.value <= 676){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            //pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Skor ELPT sesuai!"
			c.className="icon-ok"
			control1.className="control-group success"
			
        }
		} else if (elpt.value < 400 ) {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            //pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Skor ELPT kurang dari 400!"
			c.className="icon-remove"
			control1.className="control-group error"
        } else {
			
			message2.style.color = badColor2;
			message2.innerHTML = "Harus Diisi!"
			//c2.className="icon-remove"
			control3.className="control-group error"
			
			
		}
    }  
										</script>
		
										
        <script>
	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
		        <script>
		function validate(evt) {
			var theEvent = evt || window.event;
			var key = theEvent.keyCode || theEvent.which;
			key = String.fromCharCode(key);
			var regex = [0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) 
				theEvent.preventDefault();
		}
		}
		</script>
		        
        <script>
        $(function() {
            $('.tooltip').tooltip();	
			$('.tooltip-left').tooltip({ placement: 'left' });	
			$('.tooltip-right').tooltip({ placement: 'right' });	
			$('.tooltip-top').tooltip({ placement: 'top' });	
			$('.tooltip-bottom').tooltip({ placement: 'bottom' });

			$('.popover-left').popover({placement: 'left', trigger: 'hover'});
			$('.popover-right').popover({placement: 'right', trigger: 'hover'});
			$('.popover-top').popover({placement: 'top', trigger: 'hover'});
			$('.popover-bottom').popover({placement: 'bottom', trigger: 'hover'});

			$('.notification').click(function() {
				var $id = $(this).attr('id');
				switch($id) {
					case 'notification-sticky':
						$.jGrowl("Stick this!", { sticky: true });
					break;

					case 'notification-header':
						$.jGrowl("A message with a header", { header: 'Important' });
					break;

					default:
						$.jGrowl("Hello world!");
					break;
				}
			});
        });
        </script>
		<!--/.fluid-container-->
        
    </body>

</html>
<?php 
} 

else{
	header("Location: ../login.php");
}
	
?>