<!DOCTYPE html>

<?php session_start();
include ("koneksi.php");
@$idpeg=$_SESSION['ID_PEG1'];

$d4 = "SELECT ID_PEG, NAMA_PEG from tata_usaha 
								where ID_PEG='$idpeg'";
								$d2 = mysql_query($d4);
								$d = mysql_fetch_array($d2);
								
$b4 = "SELECT T.ID_PEG, T.PASSWORD, T.NAMA_PEG, T.TGL_LAHIR_TU, T.ALAMAT, T.NO_TELP, T.JK, T.EMAIL, P.NAMA_PRODI, K.NAMA_KOTA, P.ID_PRODI, K.ID_KOTA
FROM TATA_USAHA T, KOTA K, PROGRAM_STUDI P 
WHERE K.ID_KOTA=T.ID_KOTA AND P.ID_PRODI=T.ID_PRODI AND T.ID_PEG='$idpeg'";
$b2 = mysql_query($b4);
$b = mysql_fetch_array($b2);
$idtu1=$b[0];
$password=$b[1];
$namatu1=$b[2];
$tgllahir=$b[3];
$alamat1=$b[4];
$notelp1=$b[5];
$jk1=$b[6];
$email1=$b[7];
$namaprodi1=$b[8];
$namakota1=$b[9];
if (isset($_SESSION['ID_PEG1'])){
?>
<html class="no-js">
    
    <head>
        <title>Pendaftaran Yudisium</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
		<link href="../assets/DT_bootstrap.css" rel="stylesheet" media="screen">
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $d[1];?><i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li class="active">
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
                            
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Data Master<i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="datamaster-kota.php">Kota</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="datamaster-fakultas.php">Fakultas</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="datamaster-departemen.php">Departemen</a>
                                    </li>
									<li>
                                        <a tabindex="-1" href="datamaster-prodi.php">Program Studi</a>
                                    </li>
									<li>
                                        <a tabindex="-1" href="datamaster-bidangilmu.php">Bidang Ilmu</a>
                                    </li>
									<li>
                                        <a tabindex="-1" href="datamaster-jabatan.php">Jabatan</a>
                                    </li>
									<li>
                                        <a tabindex="-1" href="datamaster-mahasiswa.php">Mahasiswa</a>
                                    </li>
									<li>
                                        <a tabindex="-1" href="datamaster-dosen.php">Dosen</a>
                                    </li>
									<li >
                                        <a tabindex="-1" href="datamaster-tatausaha.php">Tata Usaha</a>
                                    </li>
									<li>
                                        <a tabindex="-1" href="datamaster-berkas.php">Berkas Yudisium</a>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Validasi Berkas<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="validasi-berkas.php">Validasi Berkas Persyaratan Yudisium</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="daftar-calon-yudisium.php">Daftar Calon Yudisium</a>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Pengelolaan Data Yudisium<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="pelaksanaan.php">Pelaksanaan Yudisium</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="pengelolaan-mahasiswa-yudisium.php">Pengelolaan Mahasiswa Yudisium</a>
                                    </li>
                                </ul>
                            </li>
							<li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Laporan Yudisium<i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="laporan-daftar.php">Laporan Mahasiswa Mendaftar Yudisium</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="laporan.php">Laporan Mahasiswa Lulus Yudisium</a>
                                    </li>
                                </ul>
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
                        <div class="block" >
                            <div class="navbar navbar-inner block-header" >
                                <div class="muted pull-left" ><strong>Profil Tata Usaha</strong></div>    
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                      <fieldset>
                                        <legend align="center">Edit Profil Tata Usaha</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">NIP</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nip" data-provide="typeahead" onkeypress='validate(event)' value="<?php echo $idtu1;?>"  placeholder="NIP" required disabled>
											
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Nama Lengkap</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nama_tu" data-provide="typeahead" value="<?php echo $namatu1;?>" data-items="4" placeholder="Nama Lengkap" required>
                                            
                                          </div>
                                        </div>
										
										
										<div class="control-group">
										<label class="control-label" >Program Studi</label>
										<div class="controls"]>
										<select name="id_prodi" class="span6 chzn-select" required>
										<option value=""> Pilih Program Studi</option>
										<?php
										$sql = mysql_query("SELECT * from program_studi") or die (mysql_error());
			
										while ($array1=mysql_fetch_array($sql))
										{ 
										if($b[10]==$array1[0]){ ?>
										<option value="<?php echo $array1["ID_PRODI"]; ?>" selected><?php echo $array1["NAMA_PRODI"]; ?></option>
										<?php  
										} else {
										?>
										<option value="<?php echo $array1["ID_PRODI"]?>"> <?php echo $array1["NAMA_PRODI"] ?></option>
										<?php
										}
										} ?>
										</select>
										</div></div>
										
										<div class="control-group">
										<label class="control-label" >Tempat Lahir</label>
										<div class="controls"]>
										<select name="id_kota" class="span6 chzn-select" required>
										<option value=""> Pilih Tempat Lahir</option>
										<?php
										$sql = mysql_query("SELECT * from kota") or die (mysql_error());
			
										while ($array2=mysql_fetch_array($sql))
										{ 
										if($b[11]==$array2[0]){ ?>
										<option value="<?php echo $array2["ID_KOTA"]; ?>" selected><?php echo $array2["NAMA_KOTA"]; ?></option>
										<?php  
										} else {
										?>
										<option value="<?php echo $array2["ID_KOTA"]?>"> <?php echo $array2["NAMA_KOTA"] ?></option>
										<?php
										}
										} ?>
										</select>
										</div></div>
										<div class="control-group">
                                         <label class="control-label" for="date01">Tanggal Lahir</label>
                                          <div class="controls">
                                            <input type="date" class="span6" id="typeahead" value="<?php echo $b[3]; ?>" data-provide="typeahead" name="tgl_lahir" required >
                                          </div>
                                        </div>
										<div class="control-group">
                                         <label class="control-label" for="date01">Alamat</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead"  data-provide="typeahead" name="alamat" value="<?php echo $alamat1;?>" placeholder="Alamat" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No. Telp</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="telp" data-provide="typeahead" onkeypress='validate(event)' value="<?php echo $notelp1;?>" data-items="4" placeholder="No. Telp" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" >Jenis Kelamin</label>
                                          <div class="controls" required>
                                            <label>
                                              <input type="radio" value="L" name="jk" <?php if($b[6]=="L"){ echo "checked";} else { echo "";} ?>  >
                                              Laki-laki
                                            </label>
											<label>
                                              <input type="radio" value="P" name="jk" <?php if($b[6]=="P"){ echo "checked";} else { echo "";} ?> >
                                             Perempuan
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="email" value="<?php echo $email1;?>" data-provide="typeahead" data-items="4" placeholder="Email" required>
                                          </div>
                                        </div>
										
										<div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                          <button type="reset" class="btn">Batal</button>
										  </div>
                                        </form>

											<?php 
												//$nip=$_REQUEST['nip'];
												@$nama_tu=$_REQUEST['nama_tu'];
												//$pass=md5($_REQUEST['pass']);
												@$id_prodi=$_REQUEST['id_prodi'];
												@$id_kota=$_REQUEST['id_kota'];
												@$tgl_lahir=$_REQUEST['tgl_lahir'];
												@$jk=$_REQUEST['jk'];
												@$alamat=$_REQUEST['alamat'];
												@$telp=$_REQUEST['telp'];
												@$email = $_REQUEST['email'];
												//$id_jabatan=$_REQUEST['id_jabatan'];
												//$periode=$_REQUEST['periode'];
												
											if(isset($nama_tu,$alamat))
											{
											mysql_query("UPDATE TATA_USAHA SET ALAMAT = '$alamat', NAMA_PEG = '$nama_tu', ID_PRODI = '$id_prodi', ID_KOTA = '$id_kota', TGL_LAHIR_TU = '$tgl_lahir', NO_TELP = '$telp' , JK = '$jk', EMAIL = '$email' WHERE ID_PEG = '$idpeg';");
											echo "<script>alert('Berhasil!!!!!!!!');</script>";
											echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=profil.php\">");

											}
											?>
											<br><br>
											
									
										<div class="span12">
                                     
                                </div>
                            </div>
								
								</fieldset>
                                </div>
                            </div>
                                  </div>
                            </div>
							
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
        <script src="../vendors/jquery-1.9.1.min.js"></script>
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
		function minimal() {
			$tanggal=document.getElementById("tglmulai").value;
			$('#tglselesai').attr({min : $tanggal});
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
			var regex = /[0-9]|\./;
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
    </body>

</html>
<?php 
} 

else{
	header("Location: ../index.php");
}
	
?>