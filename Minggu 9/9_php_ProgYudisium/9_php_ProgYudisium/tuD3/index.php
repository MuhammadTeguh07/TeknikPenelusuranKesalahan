<!DOCTYPE html>

<?php session_start();
include "koneksi.php";
@$idpeg=$_SESSION['ID_PEG1'];
if (isset ($_SESSION['ID_PEG1']) ){
								$d4 = "SELECT ID_PEG, NAMA_PEG from tata_usaha 
								where ID_PEG='$idpeg'";
								$d2 = mysqli_query($kon, $d4);
								$d = mysqli_fetch_array($d2);
								$a = "SELECT MAX(id_kota) FROM kota";
								$b = mysqli_query($kon, $a);
								$c = mysqli_fetch_array($b);
								list($maks) = mysqli_fetch_row($b);
								
								$max = $c[0];
								$kota = substr($max, 1, 4);
								$kota = $kota + 1;
								if($kota <= 9) $kota = "k000".$kota;
								if($kota <= 99 && $kota > 9) $kota = "k00".$kota;
								if($kota <= 999 && $kota > 99) $kota = "k0".$kota;
								if($kota <= 9999 && $kota > 999) $kota = "k".$kota;
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $d[1]; ?><i class="caret"></i>

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
                            <li class="active">
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
                    
					<div class="row-fluid">
                        <!-- block -->
                        <div class="block" >
                            <div class="navbar navbar-inner block-header" >
                                <div class="muted pull-left" ><strong>Selamat Datang, <?php echo $d[1]; ?></strong></div>    
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="block-content collapse in">
                                <div class="span12">
                                <legend align="center">Data Mahasiswa Mendaftar Yudisium</legend>
								<form method="POST" action="detail-mahasiswa-lulus-yudisium.php" >
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
											<th>No.</th>
											<th>PELAKSANAAN YUDISIUM</th>
											<th>LULUS YUDISIUM</th>
											<th>CONTROL</th>
										  
                                            </tr>
                                        </thead>
										<tbody>
                                         <?php
									  @$no=1;
@$str=mysqli_query($kon, "select py.nama_pelaksanaan, count(dp.id_pendaftaran), dp.id_pelaksanaan, per.nama_periode, year(py.batas_akhir) from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp, periode per where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and py.id_periode=per.id_periode and dp.status_lulus='1' group by dp.id_pelaksanaan ASC) UNION (select py.nama_pelaksanaan, count(dp.id_pendaftaran), dp.id_pelaksanaan, per.nama_periode, year(py.batas_akhir) from pendaftaran pe, pelaksanaan_yudisium py, detail_pelaksanaan dp, periode per where pe.id_pendaftaran=dp.id_pendaftaran and py.id_pelaksanaan=dp.id_pelaksanaan and py.id_periode=per.id_periode and dp.status_lulus='2' group by dp.id_pelaksanaan ASC");
				
while(@$data=mysqli_fetch_array($str))
{
echo
"<tr><td>".@$no.".</td><td>".@$data[3]." ".@$data[4]."</td><td>".@$data[1]."</td>" ?>

<td><button class="btn btn-info btn-mini" type="submit" name="pelaksanaan" value="<?php echo $data[2]; ?>">Lihat</button>
<?php echo "</td></tr>" ;
$no++;
}

?>
</tbody>
</form>

                                    </table> 
											<br><br><br><br><br><br><br><br><br><br><br><br>
                                        
						            
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