
<html>

<body>

<?php
/************************ YOUR DATABASE CONNECTION START HERE   ****************************/

session_start();
@$idpeg=$_SESSION['ID_PEG1'];
include ("koneksi.php");
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS",""); // set database password
define ("DB_NAME","yudisium"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

$databasetable = "mahasiswa";

/************************ YOUR DATABASE CONNECTION END HERE  ****************************/


set_include_path(get_include_path() . PATH_SEPARATOR . 'Classes/');
include 'PHPExcel/IOFactory.php';

// This is the file path to be uploaded.
		$file_type=array('xlsx','XLSX');
		
if(isset($_POST['submit'])){
		$file_tmp=$_FILES['upload_file']['tmp_name'];
        $file_name=$_FILES['upload_file']['name'];
        $file_size=$_FILES['upload_file']['size'];
        $eror=null;
        //cari extensi file dengan menggunakan fungsi explode
        $explode	= explode('.',$file_name);
        $extensi	= $explode[count($explode)-1];
		$file_ext	= substr($file_name, strripos($file_name, '.'));
		$folder='./../import/';
		//echo $file_name;
	move_uploaded_file($_FILES['upload_file']['tmp_name'], "../import/".$_FILES['upload_file']['name']);
	//$excel=$_FILES['upload_file']['name'];
	$inputFileName = "../import/".$_FILES['upload_file']['name']; 
	//echo $inputFileName;
try {
	$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
} catch(Exception $e) {
	die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}


$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
$arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet


for($i=2;$i<=$arrayCount;$i++){
$userName = trim($allDataInSheet[$i]["A"]);
$pass = $userName;
$userMobile = trim($allDataInSheet[$i]["B"]);
$userMobile1 = trim($allDataInSheet[$i]["C"]);
$namakota = trim($allDataInSheet[$i]["D"]);
@$getID = mysql_fetch_array(mysql_query("SELECT B.ID_BIDANGILMU from fakultas f, departemen d, program_studi p, bidangilmu b where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND p.nama_prodi='$userMobile1'"));
@$getIDkota = mysql_fetch_array(mysql_query("SELECT id_kota from kota where nama_kota='$namakota'"));
$query = "SELECT nim FROM mahasiswa WHERE nim = '".$userName."' and nama = '".$userMobile."'";
$jk = trim($allDataInSheet[$i]["E"]);
$agama = trim($allDataInSheet[$i]["F"]);
$tgl_lahir = trim($allDataInSheet[$i]["G"]);

$sql = mysql_query($query);
$recResult = mysql_fetch_array($sql);
$existName = $recResult["nim"];
if($existName=="") {
	@$format = date('Y-m-d', strtotime($tgl_lahir));
$insertTable= mysql_query("insert into mahasiswa (nim, nama, id_bidangilmu, id_kota, password, jenis_kelamin, agama, tgl_lahir ) values('".$userName."', '".$userMobile."','".$getID[0]."','".$getIDkota[0]."','".$pass."','".$jk."','".$agama."','".$format."');");			
} else if($existName!=""){
	//echo "<script>alert('Data Sudah Ada!!!!!!!!');</script>";
				$pesan1 ="2";
				echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=datamaster-mahasiswa.php?pesan=$pesan1\">");
				
//$msg = 'Record already exist. <div style="Padding:20px 0 0 0;"><a href="">Go Back to tutorial</a></div>';
} else {
	echo "";
}
}
if(@$pesan1==2) {
	echo "";
} else {
$pesan2="1";
				echo("<META HTTP-EQUIV=\"Refresh\"CONTENT=\"0;URL=datamaster-mahasiswa.php?pesan=$pesan2\">");
//echo "<div style='font: bold 18px arial,verdana;padding: 45px 0 0 500px;'>".$msg."</div>";
}
	}

else {
	echo "";
}

?>
<body>
</html>