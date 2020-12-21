<!DOCTYPE html>

<?php session_start();
include ("koneksi.php");
@$idpeg=$_SESSION['ID_PEG1'];
$d4 = "SELECT ID_PEG, NAMA_PEG from tata_usaha 
								where ID_PEG='$idpeg'";
								$d2 = mysql_query($d4);
								$d = mysql_fetch_array($d2);
@$nip=$_REQUEST['nip'];
@$data=mysql_fetch_array(mysql_query("SELECT D.NIP, D.NAMA_DOSEN, K.NAMA_KOTA, D.TGL_LAHIR_DOSEN, D.JK, D.EMAIL, K.ID_KOTA, P.NAMA_PRODI, D.ALAMAT, D.NO_TELP
								from dosen d, fakultas f, departemen dd, program_studi p, kota k
								where f.ID_FAKULTAS=dd.ID_FAKULTAS AND dd.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND  D.ID_KOTA=K.ID_KOTA AND D.NIP='$nip'"));

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
									<li >
                                        <a tabindex="-1" href="datamaster-mahasiswa.php">Mahasiswa</a>
                                    </li>
									<li class="active">
                                        <a tabindex="-1" href="datamaster-dosen.php">Dosen</a>
                                    </li>
									<li>
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
                    <?php
										$dataa=mysql_fetch_array(mysql_query("select count(nip) as jumlah from dosen;"));
										?>
					<div class="row-fluid">
                        <!-- block -->
                        <div class="block" >
                            <div class="navbar navbar-inner block-header" >
                                <div class="muted pull-left" ><strong>Data Master</strong></div>   
									<div class="pull-right"><span class="badge badge-info"> <?php echo $dataa[0]; ?></span>

                                    </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="block-content collapse in">
                                <div class="span12">
										<legend ALIGN="CENTER">Edit Data Dosen</legend>
											<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                      
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">NIP</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nip" data-provide="typeahead" value="<?php echo $data[0];?>"  placeholder="NIP" required disabled>
											
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Nama Lengkap</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nama" data-provide="typeahead" value="<?php echo $data[1];?>" data-items="4" placeholder="Nama Lengkap" required >
                                            
                                          </div>
                                        </div>
										
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Program Studi</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="id_prodi" data-provide="typeahead" value="<?php echo $data[7];?>" data-items="4" placeholder="Nama Lengkap" required disabled>
                                            
                                          </div>
                                        </div>
										
										<div class="control-group">
										<label class="control-label" >Tempat Lahir</label>
										<div class="controls"]>
										<select name="id_kota" class="span6 chzn-select" required>
										<option value=""> Pilih Tempat Lahir</option>
										<?php
										$sql = mysql_query("SELECT * from kota") or die (mysql_error());
			
										while ($array2=mysql_fetch_array($sql))
										{ 
										if($data[6]==$array2[0]){ ?>
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
                                            <input type="date" class="span6" id="typeahead" value="<?php echo $data[3]; ?>" data-provide="typeahead" name="tgl_lahir" required >
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Alamat </label>
                                          <div class="controls">
                                            <textarea type="text" class="span6" rows="2" id="typeahead" name="alamat"  placeholder="Alamat"  required><?php echo $data[8]; ?></textarea>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" >Jenis Kelamin</label>
                                          <div class="controls" required>
                                            <label>
                                              <input type="radio" value="L" name="jk" <?php if($data[4]=="L"){ echo "checked";} else { echo "";} ?>  >
                                              Laki-laki
                                            </label>
											<label>
                                              <input type="radio" value="P" name="jk" <?php if($data[4]=="P"){ echo "checked";} else { echo "";} ?> >
                                             Perempuan
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No. Telp</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="telp" data-provide="typeahead" value="<?php echo $data[9];?>" data-items="4" placeholder="Nama Lengkap" required >
                                            
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="email" data-provide="typeahead" value="<?php echo $data[5];?>" data-items="4" placeholder="Email" required>
                                            
                                          </div>
                                        </div>
										
										<div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                          <button type="reset" class="btn">Batal</button>
										  </div>
                                        </form>
											<?php 
											//@$nimm=$_REQUEST['nim'];
											//echo $nimm;
											

@$nama=$_REQUEST['nama'];
@$id_kota=$_REQUEST['id_kota'];
@$tgl_lahir=$_REQUEST['tgl_lahir'];
@$alamat=$_REQUEST['alamat'];
@$telp=$_REQUEST['telp'];
@$jk=$_REQUEST['jk'];
@$email=$_REQUEST['email'];
if (isset($nama)){
mysql_query("UPDATE `dosen` SET `ID_KOTA`='$id_kota',`NAMA_DOSEN`='$nama',`TGL_LAHIR_DOSEN`='$tgl_lahir',`ALAMAT`='$alamat',`NO_TELP`='$telp',`JK`='$jk',`EMAIL`='$email' WHERE NIP='$nip'");
echo "<script>alert('Data Berhasil Diubah');</script>";
echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=datamaster-dosen.php\">");
}

											?>
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
                <p>Pendaftaran Yudisium S1/D3 Sistem Informasi</p>
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