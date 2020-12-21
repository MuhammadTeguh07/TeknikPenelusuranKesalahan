<!DOCTYPE html>
<?php session_start();
include ("koneksi.php");
$nim1=$_SESSION['NIM1'];
$nim=$nim1;
							$date2=date("Ymdhis");
							$pend="IDPEND".$date2;
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
							$format = date('d/m/Y', strtotime($c[3]));
							
if (isset($_SESSION['NIM1'])){
	date_default_timezone_set("Asia/Jakarta");

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
                                    <li class="active">
                                        <a tabindex="-1" href="profil.php">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../login.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
						<ul class="nav">
                            <li>
                                <a href="index.php">HOME</a>
                            </li>
                            
                            <li>
                                <a href="datalulusan.php">Pendaftaran Yudisium

                                </a>
                            </li>
							<li>
                                <a href="berkas.php">Upload Berkas Persyaratan Yudisium
                                </a>
                            </li>
							<li >
                                <a href="../logout.php">Logout
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
						
                        <div class="block" >
                            <div class="navbar navbar-inner block-header" >
                                <div class="muted pull-center" align="center"><strong>Profil Mahasiswa</strong></div>    
                            </div>
							
							             
							
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="block-content collapse in">
                                <div class="span12">
								
					<div class="col-lg-12">
                                     <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                      <fieldset>
                                        
										
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
										
										<select name="id_kota" id="select01" class="span6 chzn-select" required>
										<?php
										$sql = mysql_query("SELECT * from kota") or die (mysql_error());
			
										while ($array=mysql_fetch_array($sql))
										{ 
										if($c[13]==$array[0]){ ?>
										<option value="<?php echo $array[0]; ?>" selected><?php echo $array[1]; ?></option>
										<?php  
										} else {
										?>
										<option value="<?php echo $array["ID_KOTA"]?>"> <?php echo $array["NAMA_KOTA"] ?></option>
										<?php
										}
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
                                          <label class="control-label" >Jenis Kelamin</label>
                                          <div class="controls" required>
                                            <label>
                                              <input type="radio" value="L" name="jk" <?php if($jk=="L"){ echo "checked";} else { echo "";} ?> >
                                              Laki-laki
                                            </label>
											<label>
                                              <input type="radio" value="P" name="jk" <?php if($jk=="P"){ echo "checked";} else { echo "";} ?>>
                                             Perempuan
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Alamat </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No Telp. </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="no_telp" onkeypress='validate(event)' value="<?php echo $notelp; ?>" data-provide="typeahead" data-items="4" placeholder="No Telp" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="fileInput">Foto</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="file">
                                          </div>
                                        </div>
										
                                       <div class="form-actions">
									  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                      <button type="reset" class="btn">Batal</button>
									  </div>
                                    </form>
									<?php	
												//$nim=$_REQUEST['nim'];
												@$nama=$_REQUEST['nama'];
												//@$pass=$_REQUEST['pass'];
												@$id_bidangilmu=$_REQUEST['id_bidangilmu'];
												@$id_kota=$_REQUEST['id_kota'];
												@$tgl_lahir=date('Y-m-d', strtotime($_REQUEST['tgl_lahir']));
												@$jk=$_REQUEST['jk'];
												@$alamat=$_REQUEST['alamat'];
												@$no_telp=$_REQUEST['no_telp'];
												//$foto = $_REQUEST['foto'];
												@$foto=$_FILES["file"]["name"];
												@$date2=date("Ymdhis");
										
										//$today=date("Y-m-d");
										//$foto = $_FILES["file"]["name"];
										
										
							if(isset($_REQUEST['submit']))
							{
								mysql_query("UPDATE mahasiswa SET JENIS_KELAMIN = '$jk', ID_KOTA = '$id_kota', TANGGAL_LAHIR = '$tgl_lahir', ALAMAT_RUMAH='$alamat', NO_TELP = '$no_telp', FOTO = '$foto' WHERE NIM = '$nim';");
							
							//mysql_query("INSERT INTO detail_dosen_pembimbing VALUES ('$pendf','$dosen1','Dosen Pembimbing I')");
							//ysql_query("INSERT INTO detail_dosen_pembimbing VALUES ('$pendf','$dosen2','Dosen Pembimbing II')");
							//echo mysql_error();
							//mysql_query("INSERT INTO orangtua VALUES ($dosen1,$nim)");
							echo "<script>alert('Berhasil!!!!!!!!');</script>";
							move_uploaded_file($_FILES['file']['tmp_name'], "../fotod3si/".$_FILES['file']['name']);
							echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=profil.php\">");
							//echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=datalulusan-lihat.php?nim=$nim\">");
							//move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']);
							}
							else {
							//	echo "<script>alert('Gagal!!!!!!!!');</script>";
							//	echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=datalulusan.php\">");
							}
								
							?>
                                </div>
                            </div>
                                  </div>
                            </div>
							
                        </div></div>
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
										function checkPass()
    {
        //Store the password field objects into variables ...
        var control1 = document.getElementById('control1');
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
		var c = document.getElementById('centang');
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
            //pass2.style.backgroundColor = goodColor;
            message.style.color = goodColor;
            message.innerHTML = "Password Sesuai"
			c.className="icon-ok"
			control1.className="control-group success"
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            //pass2.style.backgroundColor = badColor;
            message.style.color = badColor;
            message.innerHTML = "Password Tidak Sesuai"
			c.className="icon-remove"
			control1.className="control-group error"
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
		
    </body>

</html>
<?php 
} 

else{
header("Location: ../login.php");
}
	
?>