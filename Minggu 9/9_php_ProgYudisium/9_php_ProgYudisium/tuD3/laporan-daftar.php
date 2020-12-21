<!DOCTYPE html>

<?php session_start();
include ("koneksi.php");
@$idpeg=$_SESSION['ID_PEG1'];
$d4 = "SELECT ID_PEG, NAMA_PEG from tata_usaha 
								where ID_PEG='$idpeg'";
								$d2 = mysql_query($d4);
								$d = mysql_fetch_array($d2);
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
                                    <li class="active">
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
                                <div class="muted pull-left" ><strong>Laporan Mahasiswa Lulus Yudisium</strong></div>    
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                                      <fieldset>
                                        
										<div class="control-group">
										<label class="control-label" for="select01" >Tahun Pelaksanaan</label>
										<div class="controls"]>
										<select name="tahun" id="select01" class="span6 chzn-select" required>
										<option value=""> Pilih Tahun</option>
										<?php  
				
										$sql = mysql_query("select year(TGL_KEPUTUSAN_YUDISIUM) as tahun from detail_pelaksanaan group by year(TGL_KEPUTUSAN_YUDISIUM) desc;") or die (mysql_error());
			
										while ($array=mysql_fetch_array($sql))
										{ 
										?>
										<option value="<?php echo $array["tahun"]?>"> <?php echo $array["tahun"] ?></option>
										<?php
										}?>
										</select>
										</div></div>

										<div class="control-group">
										<label class="control-label" for="select02" > Periode</label>
										<div class="controls">
										<select name="periode" id="select02" class="span6 chzn-select" required>
										<option value=""> Pilih Periode</option>
										<?php  
				
										$sql = mysql_query("select p.nama_pelaksanaan as pelaksanaan, per.nama_periode as periode from detail_pelaksanaan dp, pelaksanaan_yudisium p, periode per where dp.ID_PELAKSANAAN=p.ID_PELAKSANAAN AND p.id_periode=per.id_periode group by p.id_pelaksanaan desc") or die (mysql_error());
			
										while ($array=mysql_fetch_array($sql))
										{ 
										?>
										<option value="<?php echo $array["periode"]?>"> <?php echo $array["periode"] ?></option>
										<?php
										}?>
										</select>
										</div></div>
										
										<!-- Show hide start -->
										<script>
										  var toggle = function() {
										  var mydiv = document.getElementById('hide');
										  if (mydiv.style.display === 'block' || mydiv.style.display === '')
											mydiv.style.display = 'none';
										  else
											mydiv.style.display = 'block'
										  }
										</script>
									<!-- Show hide end -->
                                          <div class="row-fluid padd-bottom" align="center">
										<div style="padding:1px;">
										<input type="submit" class="btn btn-info tooltip-top" data-original-title="" value="Cari"  name="simpan">	
										</div></div>
                                        </form>
										
											<?php 
											

			
												@$periode=$_REQUEST['periode'];
												@$tahun=$_REQUEST['tahun'];
											
											?>
											<br><br>
											<legend></legend>
									<fieldset>
                                        

								<div class="block-content collapse in" >
                                <div class="span12">
                                   <div class="table-toolbar">
                                      
                                   </div>
                                    <legend align="center">Daftar Mahasiswa Mendaftar Yudisium</legend>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
											<th>NO.</th>
                                          <th>NIM</th>
						                  <th>NAMA</th>
										  <th>TEMPAT, TANGGAL LAHIR</th>
										  <th>EMAIL</th>
										  <th>IPK</th>
										  
                                            </tr>
                                        </thead>
										<tbody>
                                         <?php
									  $no=1;
$str=mysql_query("select m.NIM, m.NAMA, k.NAMA_KOTA, m.TGL_LAHIR, dp.TGL_KEPUTUSAN_YUDISIUM, ps.NAMA_PRODI, per.nama_periode, pe.IPK, M.EMAIL
from detail_pelaksanaan dp, pelaksanaan_yudisium p, pendaftaran pe, mahasiswa m, kota k, fakultas f, departemen d, program_studi ps, bidangilmu b, periode per
where dp.ID_PELAKSANAAN=p.ID_PELAKSANAAN and dp.ID_PENDAFTARAN=pe.ID_PENDAFTARAN and f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=ps.ID_DEPARTEMEN AND b.ID_PRODI=ps.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND p.id_periode=per.id_periode and year(dp.TGL_KEPUTUSAN_YUDISIUM)='$tahun' and pe.NIM=m.NIM and per.nama_periode='$periode' and m.ID_KOTA=k.ID_KOTA and dp.STATUS_LULUS='0' order by m.NIM desc");
				
while(@$data=mysql_fetch_array($str))
{
				@$date1 = date('d-m-Y', strtotime($data[3]));
				@$date2 = date('d-m-Y', strtotime($data[4]));
echo
"<tr><td>".$no.".</td><td>".$data[0]."</td><td>".$data[1]."</td><td>".$data[2].", ".$date1."</td><td>".$data[8]."</td><td>".$data[7]."</td>" ?>
<form action="pelaksanaan-edit.php" >


<?php echo "</tr>" ;
$no++;
}

?>
</tbody>
</form>
                                    </table>
                                </div>
                            </div>
											
								</fieldset>
								
                                </div>
                            </div>
                                  </div>
                            </div>
							<div class="navbar navbar-inner block-header">
								<div class="row-fluid padd-bottom" align="center">
									<div style="padding:1px;">
	                                		<a href="laporan-daftar-cetak.php?tahun=<?php echo $tahun; ?>&periode=<?php echo $periode; ?>" class="btn btn-primary tooltip-top" target="_blank" data-original-title="Cetak Laporan Mahasiswa Mendaftar Yudisium" >Cetak</a>
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