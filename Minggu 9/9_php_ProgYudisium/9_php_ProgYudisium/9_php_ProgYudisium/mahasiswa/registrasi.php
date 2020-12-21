<!DOCTYPE html>
<?php
session_start();
include ("koneksi.php");
$nim1=$_SESSION['NIM1'];
$nim=$nim1;
							$c = mysql_fetch_array(mysql_query("SELECT M.NIM, M.NAMA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, K.NAMA_KOTA, M.AGAMA
							from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k
							where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND k.id_kota=m.id_kota  AND M.NIM='$nim'"));
							$format = date('m/d/Y', strtotime($c[2]));
							date_default_timezone_set("Asia/Jakarta");
	@$today=date("m/d/Y");
  //Cek Login Apakah Sudah Login atau Belum
 if (isset($_SESSION['NIM1'])){
  // Jika Tidak Arahkan Kembali ke Halaman Login

								
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
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="../login.php">Logout</a>
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
                        <div class="span12">
                            <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><strong>Selamat Datang, <?php echo $c[1]; ?></strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
													<div class="col-lg-12">
                                     <form class="form-horizontal" method="POST" action="input-registrasi.php" enctype="multipart/form-data">
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
                                            <input type="text" class="span6" id="typeahead" name="nama" value="<?php echo $c[1]; ?>" data-provide="typeahead" data-items="4" placeholder="Nama Lengkap" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Ganti Password</label>
                                          <div class="controls">
                                            <input type="password" class="span6" id="pass1" name="pass1"  data-provide="typeahead" data-items="4" placeholder="Ganti Password">
											<p class="help-block">Ganti password untuk keamanan akun Anda</p>
                                          </div>
                                        </div>
										<div class="control-group" id="control1">
                                          <label class="control-label" for="typeahead">Ulangi Password</label>
                                          <div class="controls">
                                            <input type="password" class="span6" id="pass2" name="pass2" onkeyup="checkPass(); return false;" data-provide="typeahead" data-items="4" placeholder="Ulangi Password">
											<span id="confirmMessage" class="confirmMessage"></span>
											<i class="icon-ok hidden" id="centang"></i>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Fakultas</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="namafak" value="<?php echo $c[3]; ?>" data-provide="typeahead" data-items="4" placeholder="Fakultas" disabled>
                                          </div>
										  </div>
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">Program Studi</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="namaprodi" value="<?php echo $c[4]; ?>" data-provide="typeahead" data-items="4" placeholder="Program Studi" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Tempat Lahir</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="id_kota" value="<?php echo $c[10];?>"  placeholder="Alamat" required disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="date01">Tanggal Lahir</label>
                                          <div class="controls">
                                            <input type="text" class="span6 input-xlarge datepicker" name="tgl_lahir" id="date01" value="<?php echo $format; ?>" disabled>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Alamat </label>
                                          <div class="controls">
                                            <textarea type="text" class="span6" rows="2" id="typeahead" name="alamat"  placeholder="Alamat" required></textarea>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" >Jenis Kelamin</label>
                                          <div class="controls" required>
                                            <label>
                                              <input type="radio" value="L" name="jk" <?php if($c[6]=="L"){ echo "checked";} else { echo "";} ?> disabled >
                                              Laki-laki
                                            </label>
											<label>
                                              <input type="radio" value="P" name="jk" <?php if($c[6]=="P"){ echo "checked";} else { echo "";} ?> disabled>
                                             Perempuan
                                            </label>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Agama</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="agama" value="<?php echo $c[11]; ?>" data-provide="typeahead" data-items="4" placeholder="Agama" disabled>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">No. Telp </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="no_telp" onkeypress='validate(event)'  data-provide="typeahead" data-items="4" placeholder="No. Telp" required>
                                          </div></div>
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">No. Hp </label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="no_hp" onkeypress='validate(event)'  data-provide="typeahead" data-items="4" placeholder="No. Hp" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Email</label>
                                          <div class="controls">
                                            <input type="text" class="span6" id="typeahead" name="email" data-provide="typeahead" data-items="4" placeholder="Email" required>
											<p class="help-block">Isi email dengan benar, untuk pengumuman yudisium</p>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <label class="control-label" for="fileInput">Foto</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="file" required>
                                          </div>
                                        </div>
										
                                       <div class="form-actions">
									  <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                      <button type="reset" class="btn">Batal</button>
									  </div>
                                    </form>
									
                                </div>
                                </div>
                            </div>
                        </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                         
                            <!-- /block -->
               
                            <!-- /block -->
                        </div>
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
                document.location='proses-registrasi.php';
                $('#rootwizard').find("a[href*='proses-registrasi.php']").trigger('click');
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