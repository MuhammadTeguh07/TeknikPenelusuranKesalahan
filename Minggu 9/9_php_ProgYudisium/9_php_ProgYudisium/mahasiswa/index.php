<!DOCTYPE html>
<?php
session_start();
include ("koneksi.php");
$nim1=$_SESSION['NIM1'];
$nim=$nim1;
							$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO
							from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k 
							where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND m.ID_KOTA=k.ID_KOTA AND M.NIM='$nim'";
								$c2 = mysql_query($c4);
								$c = mysql_fetch_array($c2);
 // Cek Login Apakah Sudah Login atau Belum
 if (isset($_SESSION['NIM1'])){
  // Jika Tidak Arahkan Kembali ke Halaman Login

								
?>
<html class="no-js">
    
    <head>
        <title>INDEX MAHASISWA</title>
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
                            <li class="active">
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
							<li class="dropdown">
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
                        <div class="span12">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="muted pull-left"> <strong>Selamat Datang, <?php echo $c[1]; ?></strong></div>
                                    
									
                                    
                                </div>
								<?php
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
								$countdown = mysql_fetch_array(mysql_query("SELECT sum(day(p.BATAS_AKHIR)-day(CURRENT_DATE)) as countdown, NAMA_PELAKSANAAN, ID_PELAKSANAAN, BATAS_AWAL, BATAS_AKHIR, per.nama_periode
								FROM pelaksanaan_yudisium p, periode per WHERE p.id_periode=per.id_periode and (BATAS_AWAL<CURRENT_DATE or BATAS_AWAL=CURRENT_DATE) and (BATAS_AKHIR>CURRENT_DATE or BATAS_AKHIR=CURRENT_DATE)"));
								$ceklulus = mysql_fetch_array(mysql_query("SELECT dp.status_lulus, p.id_pendaftaran, dp.ID_PELAKSANAAN FROM mahasiswa m, pendaftaran p, detail_pelaksanaan dp WHERE dp.id_pendaftaran=p.id_pendaftaran and p.NIM=m.NIM and m.NIM='$nim' and dp.status_lulus='2' order by dp.id_pelaksanaan desc limit 1"));
								$cekdaftar = mysql_fetch_array(mysql_query("SELECT p.id_pendaftaran, max(dp.ID_DETAIL_PELAKSANAAN) FROM mahasiswa m, pendaftaran p, detail_pelaksanaan dp WHERE dp.id_pendaftaran=p.id_pendaftaran and p.NIM=m.NIM and m.NIM='$nim' and dp.status_lulus='0' order by dp.id_pelaksanaan desc limit 1"));
								if($cekdaftar[1]==1){
								if ($countdown[2]!=$ceklulus[2]){
									$period = $countdown[2];
									$dftr = $ceklulus[1];
									$date2=date('Y-m-d');
									@$tambah = mysql_query ("INSERT INTO detail_pelaksanaan VALUES ('$detail','$period','$dftr','$date2','0')");
								}}else{
									echo "";
								}
								@$mulai = date('d-m-Y', strtotime($countdown[3]));
								@$selesai = date('d-m-Y', strtotime($countdown[4]));
								
								?>
                                <div class="block-content collapse in" align="center" >
                                    <legend>Informasi Pelaksanaan Yudisium</legend>
									<div class="span6">
									<table class="table table-bordered">
						              <thead>
						                <tr>
						                  <th>Periode Yudisium</th>
						                  <td><?php echo $countdown[5]; ?></td>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <th>Tanggal Mulai</th>
						                  <td><?php echo $mulai; ?></td>
						                </tr>
										
						                <tr>
						                  <th>Tanggal Selesai</th>
						                  <td><?php echo $selesai; ?></td>
						                  
						                </tr>
						                <tr>
						                  <th>Waktu Pendaftaran Yudisium</th>
						                  <td>
									<?php //echo $countdown[0]; 
									if ($countdown[0]=='0') {
									echo 'tinggal Hari ini';
									} else {
									echo "sisa <strong>".$countdown[0]."</strong> hari";
									} ?>
									</td> 
						                </tr>
						              </tbody>
						            </table>
									</div>
										<div class="span3">
										
										</div>
		
		
									
									
									<br><br>
                                </div>
								<div class="block-content collapse in" align="center" >
                                    <legend>Berkas Yang Didownload</legend>
									<div class="span6">
									<?php $file="bebasalat.pdf";
										  $file1="labelcd.docx";
										  $file2="kesediaan.pdf";
										?>
									<table class="table table-bordered">
						              <thead>
										<tr>
						                  <th><center>Nama Berkas</center></th>
						                  <th>Download</th>
						                </tr>
						                <tr>
						                  <td>Surat Keterangan Bebas Alat dan Buku</td>
						                  <td><a href="../berkasdownload/bebasalat.php?nama=<?php echo @$file; ?>" class="btn btn-info btn-mini" ><i class="icon-download"></i> Download</a></td>
						                </tr>
						              </thead>
						              <tbody>
						                <tr>
						                  <td>Label CD</td>
						                  <td><a href="../berkasdownload/labelcd.php?nama=<?php echo @$file1; ?>" class="btn btn-info btn-mini" ><i class="icon-download"></i> Download</a></td>
						                </tr>
										
						                <tr>
						                  <td>Surat Kesediaan Publikasi Karya Ilmiah</td>
						                  <td><a href="../berkasdownload/bebasalat.php?nama=<?php echo @$file2; ?>" class="btn btn-info btn-mini" ><i class="icon-download"></i> Download</a></td>
						                  
						                </tr>
						                
						              </tbody>
						            </table>
									</div>
										<div class="span3">
										
										</div>
		
		
									
									
									<br><br>
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
                <p>Pendaftaran Yudisium D3 Sistem Informasi</p>
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
    </body>

</html>
<?php 
} 

else{
header("Location: ../login.php");
}
	
?>