<!DOCTYPE html>
<?php 
session_start();
include ("koneksi.php");
$nim1=$_SESSION['NIM1'];
$nim=$nim1;
						
if (isset($_SESSION['NIM1'])){
	date_default_timezone_set("Asia/Jakarta");
	$date2=date("Ymdhis");
							
							$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN
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
							$foto=$c[10];
							$format = date('d/m/Y', strtotime($c[3]));
							
								
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
                                        <a tabindex="-1" href="#">Profile</a>
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
                            
                            <li>
                                <a href="datalulusan.php">Pendaftaran Yudisium

                                </a>
                            </li>
							<li>
                                <a href="berkas.php">Upload Berkas Persyaratan Yudisium
                                </a>
                            </li>
							<li>
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
                                <div class="muted pull-center" align="center"><strong>Profil Mahasiswa</strong></div>
                            </div>
							<?php
								$deu4 = "SELECT P.ID_PENDAFTARAN, P.TANGGAL_DITERIMA, P.AGAMA, P.NAMA_ORTU, P.PEKERJAAN, P.JUDUL_TA, P.IPK, P.TOTAL_SKS, P.TANGGAL_LULUS_YUDISIUM, P.TGL_DAFTAR, P.NOMOR_IJAZAH, P.SKOR_ELPT, P.TANGGAL_SAATINI FROM PENDAFTARAN P, MAHASISWA M WHERE M.NIM=P.NIM AND P.ID_PENDAFTARAN='$pendf'";
								$deu2 = mysql_query($deu4);
								@$deu = mysql_fetch_array($deu2);
								$date1 = date('d-m-Y', strtotime($deu[1]));
								$date2 = date('d-m-Y', strtotime($deu[8]));
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
  									<table class="table table-bordered">
						             
					<tr><td rowspan="10"><img src="<?php echo "../fotod3si/".$foto;?>" height="100" width="150" border="3"></td></td></tr>
					<tr><td><label>NIM</label></td><td><label><?php echo "".$c[0].""; ?></label></td></tr>
					<tr><td><label>Nama Lengkap</label></td><td><label><?php echo "".$c[1].""; ?></label></td></tr>
					<tr><td><label>Fakultas</label></td><td> <label><?php echo "".$c[4].""; ?></label></td></tr>
					<tr><td><label>Program Studi</label></td><td> <label><?php echo "".$c[5].""; ?></label></td></tr>
					
					<tr><td><label>Tempat Lahir</label></td><td> <label><?php echo "".$c[2].""; ?></label></td></tr>
					<tr><td><label>Tanggal Lahir</label></td><td> <label><?php echo "".$format.""; ?></label></td></tr>
					
					<tr><td><label>Jenis Kelamin</label></td><td> <label><?php if ($c[7]=='L') {
	echo "Laki-laki";
} else {
	echo "Perempuan";
} ?></label></td></tr>
					<tr><td><label>Alamat Rumah</label></td><td> <label><?php echo "".$c[8].""; ?></label></td></tr>
					<tr><td><label>No. Telp </label></td><td> <label><?php echo "".$c[9].""; ?></label></td></tr>
					
						            </table>
									
									<div class="navbar navbar-inner block-header">
									
								<div class="row-fluid padd-bottom" align="center">
									<div style="padding:1px;">
							<form action="profil-edit.php" >
                       <button type="submit" class="btn btn-info tooltip-top" data-original-title="Edit Profil Mahasiswa"  name="nimm" value="<?php echo $c[0]; ?>"><i class="icon-edit"></i> Edit Profil</button>
					   </form>		
						
                                </div></div>
								
								</div>
							</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
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
        <script src="../vendors/jquery-1.9.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
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