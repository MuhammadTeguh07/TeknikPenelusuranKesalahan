<!DOCTYPE html>

<?php session_start();
include ("koneksi.php");
@$idkota=$_POST["idkota"];
@$nim=$_REQUEST["nim"];
@$idpeg=$_SESSION['ID_PEG1'];
$d4 = "SELECT ID_PEG, NAMA_PEG from tata_usaha 
								where ID_PEG='$idpeg'";
								$d2 = mysql_query($d4);
								$d = mysql_fetch_array($d2);
$data=mysql_fetch_array(mysql_query("SELECT ID_KOTA, NAMA_KOTA from kota where
ID_KOTA='$idkota'"));
if (isset($_SESSION['ID_PEG1'])){
$namakota=$data[1];

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
                                    <li class="active">
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
                        <!-- block -->
                        <div class="block" >
                            <div class="navbar navbar-inner block-header" >
							<form method="post" action="proses-validasi.php" id="formID" >
                                <div class="muted pull-left" ><strong>Validasi Berkas Persyaratan Yudisium</strong></div>    
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
                                  <div class="block-content collapse in">
                                <div class="span12">
                                     <form class="form-horizontal">
                                      
                                        <?php 
										
										$data=mysql_fetch_array(mysql_query("SELECT j.nama_jenis, m.NIM, m.NAMA, p.NAMA_PRODI, pe.tanggal_ujian_ta, pe.skor_elpt, pe.nilai_skp, pe.presentase_nilai_d, pe.lulus_ppkmb
										FROM detail_berkas db, jenis_berkas j, pendaftaran pe, mahasiswa m, bidangilmu b, program_studi p
										WHERE J.ID_JENIS=DB.ID_JENIS AND pe.NIM=m.NIM AND m.NIM='$nim' AND m.id_bidangilmu=b.id_bidangilmu AND b.id_prodi=p.id_prodi;"));
										$tgl_ujian = date('d-m-Y', strtotime($data[4]));
										?>
	<table width="100%" border="0">
		<tr height="30px">
			<td>Nama</td>
			<td>:</td>
			<td><input value="<?php echo $data[2];  ?>" type="text" name="nama" id="nama" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">NIM</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php echo $data[1];   ?>" type="text" name="nim" id="nim" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">Program Studi</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php echo $data[3];  ?>" type="text" name="jenis" id="jenis" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">Tanggal Ujian</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php echo $tgl_ujian;  ?>" type="text" name="tgl_ujian" id="tgl_ujian" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">Skor ELPT</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php echo $data[5];  ?>" type="text" name="elpt" id="elpt" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">Nilai SKP</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php echo $data[6];  ?>" type="text" name="skp" id="skp" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">Presentase Nilai D</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php echo $data[7];  ?>" type="text" name="nilaid" id="nilaid" readonly /></td>
		</tr>
		<tr height="30px">
			<td width="25%">PPKMB</td>
			<td width="5%">:</td>
			<td width="70%"><input value="<?php 
			if ($data[8]==1) {
				echo "Lulus";
			} else {
				echo "Tidak Lulus";
			}  ?>" type="text" name="ppkmb" id="ppkmb" readonly /></td>
		</tr>
	</table>									
										
										
										<?php  $no=1; ?>
							<div class="block-content collapse in">
                                <div class="span12">
  									<table class="table table-bordered">
						              <thead  align="center">
						                <tr >
						                  <th>No.</th>
										  <th>Nama Berkas Yudisium</th>
										  <th>Control</th>
						                  <th colspan="2" ><center>Validasi</center></th>
										  
										  
						                </tr>
						              </thead>
						              <?php
									  
										$strr1=mysql_query("SELECT j.nama_jenis, j.id_jenis, m.NIM, m.NAMA, p.NAMA_PRODI, db.STATUS_VALIDASI, db.file, pe.id_pendaftaran
										FROM detail_berkas db, jenis_berkas j, pendaftaran pe, mahasiswa m, bidangilmu b, program_studi p
										WHERE J.ID_JENIS=DB.ID_JENIS AND pe.NIM=m.NIM AND m.NIM='$nim' AND m.id_bidangilmu=b.id_bidangilmu AND b.id_prodi=p.id_prodi AND db.ID_PENDAFTARAN=pe.ID_PENDAFTARAN;");
while($dataa=mysql_fetch_array($strr1)){ ?>
<tbody>
<tr>
<td> <?php echo "$no."; ?> </td>
<td><a href="../uploadberkas/<?php echo @$dataa[6]; ?>"  target="_blank" > <?php echo $dataa[0]; ?></a></td>
<td><a href="../uploadberkas/download.php?nama=<?php echo @$dataa[6]; ?>" class="btn btn-info btn-mini" ><i class="icon-download"></i> Download</a></td>
<td><?php if($dataa[5]==1){?>
<center><input type="checkbox" name="check_f[]" id="check<?php echo $no;?>" value="<?php echo @$dataa[1]; ?>" class="checkbox" checked="checked"></center>
<?php } else if($dataa[5]==0){?>
<center><input type="checkbox" value="<?php echo @$dataa[1]; ?>" id="check<?php echo $i;?>" name="check_f[]" class="checkbox"></center>
<?php }?>
</td>

</tr>
<?php @$no++; } ?>
<tr>
    <td></td>
	
    <td><?php echo "<strong>Validasi Semua</strong>";?></td>
    <td>
	<td colspan="2"><center><input type="checkbox" id="cAll" value="select"></td></center>
  </tr>
</tbody>
 </table>
 
 


<div class="row-fluid padd-bottom" align="center">
									<div style="padding:1px;">
							
                       <Input type="submit" class="btn btn-info tooltip-top" data-original-title="Validasi Berkas" value="Validasi"  name="simpan">
					   </form>		
						
                                </div></div>

						           
                                </div>
                            </div>

                                </div>
                           
                        </div>
                                        </div>
										
                                        
									  
                                   

                                </div>
                            </div>
                                  </div>
                            </div>
							
                        </div>
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

        </div>
        <!--/.fluid-container-->
        <script src="../vendors/jquery-1.9.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="../assets/scripts.js"></script>

		        <script>
$(document).ready(function(){
    $('#cAll').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#cAll').prop('checked',true);
        }else{
            $('#cAll').prop('checked',false);
        }
    });
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
		function show() {
			
		}
        </script>
    </body>

</html>
<?php 
} 

else{
	header("Location: ../index.php");
}
	
?>