<?php
include('../../../koneksi.php');

$k=$_REQUEST['k'];
$x=$_REQUEST['x'];

if($k=="a"){
$r = $_POST['r'];
$h = $_POST['h'];
$j1 = $_POST['j1'];
$j2 = $_POST['j2'];
$p = $_POST['p'];
$kl = $_POST['kl'];
$mk = $_POST['kodematkul'];
$nip1 = $_POST['nip1'];
$nip2 = $_POST['nip2'];

$ck=mysqli_num_rows(mysqli_query($koneksi,"select * from detailjadwal where koderuang='$r' and kodehari='$h' and kodejam='$j1' and kodejam2='$j2'"));
if($ck==0){
	$ck=mysqli_num_rows(mysqli_query($koneksi,"select * from detailjadwal"));
	$ck++;
	$a = mysqli_query($koneksi,"insert into detailjadwal values('$nip2','$ck','$r','$x','$j1','$h','$nip1','$mk','$p','$kl')")or die (mysqli_error($koneksi));
	header('location:det-jadwal.php?kd='.$x.'');
} else {
		echo '<script type="text/javascript">'; 
		echo 'alert("Jadwal Sudah Tersedia");'; 
		echo 'window.location.href = "det-jadwal.php?kd='.$x.'";';
		echo '</script>';
		}
} else {
		$kd=$_REQUEST['kd'];
		$b = mysqli_query($koneksi,"delete from detailjadwal where iddetail='".$kd."'") or die (mysqli_error($koneksi));
		header('location:det-jadwal.php?kd='.$x.'');
		}
?>