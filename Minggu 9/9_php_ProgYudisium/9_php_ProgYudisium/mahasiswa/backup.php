<!DOCTYPE html>
<?php 
session_start();
include ("koneksi.php");
$nim1=$_SESSION['NIM1'];
$nim=$nim1;
						
//if (isset($_SESSION['id_kar'])&&$_SESSION['status_kar']=='Admin'){
	date_default_timezone_set("Asia/Jakarta");
	$date2=date("Ymdhis");
							
							$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TANGGAL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN, PE.TANGGAL_DITERIMA, K.ID_KOTA
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
                                <a href="datalulusan.php">Data Lulusan Mahasiswa

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
								$deu4 = "SELECT P.ID_PENDAFTARAN, P.TANGGAL_DITERIMA, M.AGAMA, P.NAMA_ORTU, P.PEKERJAAN, P.JUDUL_TA, P.IPK, P.TOTAL_SKS,  P.TGL_DAFTAR, P.SKOR_ELPT FROM PENDAFTARAN P, MAHASISWA M WHERE M.NIM=P.NIM AND P.ID_PENDAFTARAN='$pendf'";
								@$deu2 = mysql_query($deu4);
								@$deu = mysql_fetch_array($deu2);
								
								@$date2 = date('d-m-Y', strtotime($deu[8]));
								//$date5 = date('d-m-Y', strtotime($c[20]));
								
								
								
								$d3 = "select d.NAMA_DOSEN from pendaftaran p, dosen d, detail_dosen_pembimbing dd where d.NIP=dd.NIP AND p.ID_PENDAFTARAN=dd.ID_PENDAFTARAN AND p.ID_PENDAFTARAN='$pendf' AND dd.STATUS_DOSEN_PEMBIMBING='Dosen Pembimbing I'";
								$d2 = mysql_query($d3);
								$dosen1 = mysql_fetch_array($d2);
								$dosen11=$dosen1[0];
								$e3 = "select d.NAMA_DOSEN from pendaftaran p, dosen d, detail_dosen_pembimbing dd where d.NIP=dd.NIP AND p.ID_PENDAFTARAN=dd.ID_PENDAFTARAN AND p.ID_PENDAFTARAN='$pendf' AND dd.STATUS_DOSEN_PEMBIMBING='Dosen Pembimbing II'";
								$e2 = mysql_query($e3);
								$dosen2 = mysql_fetch_array($e2);
								$dosen22=$dosen2[0];
								
								
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
  													<div class="col-lg-12">
                                     <form class="form-horizontal" method="POST" action="proses-input-datalulusan.php" enctype="multipart/form-data">
                                      <fieldset>
                                        <legend align="center">Data Lulusan Mahasiswa</legend>
										
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">NIM</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="nim" value="<?php echo $nim; ?>" data-provide=typeahead" data-items="4"  placeholder="NIM" disabled>
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
										<label class="control-label" for="select01" >Tempat Lahir</label>
										<div class="controls"]>
										
										<?php
										//@$cekkota=mysql_fetch_array(mysql_query("select m.id_kota, k.nama_kota from mahasiswa m, kota k where m.id_kota=k.id_kota and m.nim='$nim'"));
										
										?>
										<select name="id_kota" id="select01" class="span6 chzn-select" required>
										<?php //if($cekkota==1){ ?>
										
										
										<option value=""> Pilih Kota</option>
										<?php  
				
										$sql = mysql_query("SELECT * from kota") or die (mysql_error());
			
										while ($array=mysql_fetch_array($sql))
										{ 
										?>
										<option value="<?php echo $array["ID_KOTA"]?>"> <?php echo $array["NAMA_KOTA"] ?></option>
										<?php
										} ?>
										</select>
										</div></div>
										
										<div class="control-group">
                                          <label class="control-label" for="date01">Tanggal Lahir</label>
                                          <div class="controls">
                                            <input type="text" class="span6 input-xlarge datepicker" name="tgl_lahir" id="date01" value="<?php echo $format; ?>">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Alamat </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" >Jenis Kelamin</label>
                                          <div class="controls" required>
                                            <label>
                                              <input type="radio" value="L" name="jk" checked="checked">
                                              Laki-laki
                                            </label>
											<label>
                                              <input type="radio" value="P" name="jk">
                                             Perempuan
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No Telp. </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="no_telp" onkeypress='validate(event)' value="<?php echo $notelp; ?>" data-provide="typeahead" data-items="4" placeholder="No Telp" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="email" onkeypress='validate(event)' value="<?php //echo $email; ?>" data-provide="typeahead" data-items="4" placeholder="Email" required>
                                          </div>
                                        </div>
										<div class="control-group" id="control1">
                                          <label class="control-label" for="typeahead">Skor ELPT</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="elpt" onkeyup="checkelpt(); return false;" name="elpt" onkeypress='validate(event)' value="<?php //echo $email; ?>" data-provide="typeahead" data-items="4" placeholder="" required>
										  <span id="confirmMessage" class="confirmMessage"></span>
										  <i class="icon-ok hidden" id="centang"></i>
										  </div>
                                        </div>
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
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            //pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Benar!"
			c.classname="icon-ok"
			control1.class="control-group success"
        }else if (elpt.value < 400 ) {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            //pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Salah!"
			c.classname="icon-remove"
			control1.classname="control-group error"
        } else {
			c.classname="icon-remove"
			control1.classname="control-group error"
			
			
		}
    }  
										</script>
										
                                       
									  <button type="submit" class="btn">Simpan</button>
                                      <button type="reset" class="btn">Batal</button>
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
										function checkPass()
    {
        //Store the password field objects into variables ...
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        //Store the Confimation Message Object ...
        var message = document.getElementById('confirmMessage');
        //Set the colors we will be using ...
        var goodColor = "#66cc66";
        var badColor = "#ff6666";
        //Compare the values in the password field 
        //and the confirmation field
        if(pass1.value == pass2.value){
            //The passwords match. 
            //Set the color to the good color and inform
            //the user that they have entered the correct password 
            pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Passwords Match!"
        }else{
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Passwords Do Not Match!"
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
		<!--/.fluid-container-->
        
    </body>

</html>
<?php 
//} 

//else{
	//header("Location: ../index.php");
//}
	
?>