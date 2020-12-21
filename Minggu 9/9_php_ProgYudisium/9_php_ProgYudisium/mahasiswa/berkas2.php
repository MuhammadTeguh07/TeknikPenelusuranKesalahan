<!DOCTYPE html>
<html >
    <?php session_start();
include ("koneksi.php");
@$nim1=$_SESSION['NIM1'];
$nim=$nim1;
							$date2=date("Ymdhis");
							//$pend="IDPEND".$date2;
							$c4 = "SELECT M.NIM, M.NAMA, K.NAMA_KOTA, M.TANGGAL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN
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

//if (isset($_SESSION['id_kar'])&&$_SESSION['status_kar']=='Admin'){
	date_default_timezone_set("Asia/Jakarta");

?>
    <head>
        <title>Upload Berkas</title>
        <!-- Bootstrap -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="../assets/styles.css" rel="stylesheet" media="screen">
        
                   <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <script src="../vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
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
                    <a class="brand" href="#">Pendaftaran Yudisium <br>S1/D3 Sistem Informasi<br></a>
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
                                <a href="datalulusan.php" >Data Lulusan Mahasiswa

                                </a>
                            </li>
							<li class="active">
                                <a href="berkas.php" >Upload Berkas Persyaratan Yudisium
                                </a>
                            </li>
							<li class="dropdown">
                                <a href="../login.php" >Logout
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


                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" ><strong>Upload Berkas Persyaratan Yudisium</strong></div> 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								        <fieldset>
                                        <legend align="center">Upload Berkas Persyaratan Yudisium</legend>
                                </div>
										<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
										<div class="control-group">
										<label class="control-label" for="select01" >Nama Jenis Berkas</label>
										<div class="controls">
										<select name="berkass" id="select01" class="span5 chzn-select" required>
										<option value=""> Pilih Berkas</option>
										<?php  
				
										$sql = mysql_query("select * from jenis_berkas where id_jenis not in ( select id_jenis from detail_berkas where id_pendaftaran='$pendf')") or die (mysql_error());
			
										while ($array=mysql_fetch_array($sql))
										{ 
										?>
										<option value="<?php echo $array["ID_JENIS"]?>"> <?php echo $array["NAMA_JENIS"] ?></option>
										<?php
										}?>
										</select>
										</div></div>
										<div class="controls">
                                            <input class="span6 input-file uniform_on" id="fileInput" type="file" name="upload_file" required>
											<p class="help-block"><h6>Format : ( JPG, JPEG, PNG ) max 1Mb</h6></p>
                                          </div>
										 <legend align="center"> 
										<button type="submit" class="btn" name="submit">Upload</button>
										 </legend>
										</form>
										
<?php
      //type file yang bisa diupload
      $file_type=array('JPG','JPEG','PNG', 'jpg','jpeg','png');

      $folder='./../uploadberkas/';

      //ukuran maximum file yang dapat diupload
      $max_size=1000000; // 1MB
      if(isset($_POST['submit'])){
        //Mulai memproses data
        $date=date('Y-m-d');
        $berkass=$_POST['berkass'];
        $file_tmp=$_FILES['upload_file']['tmp_name'];
        $file_name=$_FILES['upload_file']['name'];
        $file_size=$_FILES['upload_file']['size'];
        $eror=null;
        //cari extensi file dengan menggunakan fungsi explode
        $explode	= explode('.',$file_name);
        $extensi	= $explode[count($explode)-1];

        //check apakah type file sudah sesuai
          if(!in_array($extensi,$file_type)){
            $eror="true";
           // $pesan = '- Type file yang anda upload tidak sesuai<br />';
			echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Maaf!</strong> Type file yang anda upload tidak sesuai.
									</div>';
          }

        //check ukuran file apakah sudah sesuai
          if($file_size > $max_size){
            $eror="true";
           // $pesan = '- Ukuran file melebihi batas maximum<br />';
						echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Maaf!</strong> Ukuran file melebihi batas maximum.
									</div>';
          }

          if($eror=="true"){
            echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> Proses upload eror.
									</div>';
          }
          else{
            //mulai memproses upload file
            if(move_uploaded_file($file_tmp, $folder.$file_name)){
              //catat nama file ke database
             $catat = mysql_query("INSERT INTO detail_berkas
                VALUES ('$berkass','$pendf','$folder.$file_name','0')");
				echo '<div class="alert alert-success">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Upload File '.$file_name.' Berhasil!</strong> Silahkan upload yang lain.
									</div>';
									echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"2;URL=berkas.php\">");
              
            }
            else{
            //echo "Proses upload eror";
			echo '<div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> Proses upload eror.
									</div>';
            }
          }
      }
	  @$dataaa=mysql_fetch_array(mysql_query("select count(id_jenis) from jenis_berkas;"));
	  @$dataa=mysql_fetch_array(mysql_query("select count(id_jenis) from jenis_berkas where id_jenis not in ( select id_jenis from detail_berkas where id_pendaftaran='$pendf');"));
	  
	  if ($dataa[0]==$dataaa[0]) {
		  echo '<legend align="center">Anda Belum Upload Berkas</legend>';
	  } else {
      ?>		<fieldset></fieldset>
	  									<fieldset>
                                        <legend align="center">Daftar Berkas Yudisium yang Sudah di Upload</legend>
										<?php
										
										?>
										Sisa File yang belum diupload : <?php echo $dataa[0]; ?>
								<div class="block-content collapse in">
                                <div class="span12">
								<form method="POST" action="uploadulang.php">
  									<table class="table table-bordered">
						              <thead >
						                <tr >
						                  <th>NO.</th>
										  <th >NAMA BERKAS</th>
										  <th>CONTROL</th>
						                  <th>STATUS VALIDASI</th>
										  
										  
						                </tr>
						              </thead>
									  <tbody>
						              <?php
									  $no=1;
$str=mysql_query("SELECT j.nama_jenis, db.status_validasi, j.id_jenis 
FROM detail_berkas db, jenis_berkas j 
WHERE J.ID_JENIS=DB.ID_JENIS AND ID_PENDAFTARAN='$pendf';");
while($data=mysql_fetch_array($str))
{
echo
"<tr><td>".$no.".</td>
<td>".$data[0]."</td>"; 
if($data[1]==1){
	$ok='hidden';
	$message="Sudah Divalidasi";
} else {
	$ok='';
	$message='';
}
?>
<td><?php echo $message;?>
<button type="submit" name="uploadulang" value="<?php echo @$data[2]; ?>" class="btn btn-warning btn-mini <?php echo $ok; ?>">Upload Ulang</button>
<a href="../uploadberkas/download.php?nama=<?php echo @$dataa[6]; ?>" class="btn btn-info btn-mini <?php echo $ok; ?>" >Lihat</a>
</td>
<?php echo "<td>";
 if ($data[1]=='0') {
	echo '<i class="icon-remove"><i>';
} else if ($data[1]=='1') {
	echo '<i class="icon-ok"><i>';
} else {
	echo "Tidak Valid";
} echo"</td>"; ?>


<?php echo "</tr>" ;
$no++;
}
?>
									</tbody>
						            </table>
                                </div></div>
								
                            
								
								</fieldset>
	  <?php } ?>
	  
                            </div>
							<?php 
							$muncul = mysql_query("select * from jenis_berkas where id_jenis not in ( select id_jenis from detail_berkas where id_pendaftaran='$pendf')");
							?>
							
							<div class="navbar navbar-inner block-header">
								<div class="row-fluid padd-bottom" align="center">
									<div style="padding:1px;">
	                                		<a href="" class="btn btn-info tooltip-top" data-original-title="Cetak Syarat Kelulusan" >Cetak</button>
									</div>
								</div>
							</div>
							</form>
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
		<script src="../assets/scripts.js"></script>
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
		<!--/.fluid-container-->
    </body>

</html>