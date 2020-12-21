<?php 
session_start();
 include "koneksi.php";
 @$idpeg=$_SESSION['ID_PEG1'];
 @$nim=$_REQUEST['nim'];
 @$detail=$_REQUEST['detail'];
 //echo $nim;
 @$date2=date('Y-m-d');
$x=mysql_query("SELECT M.NIM, M.NAMA, M.EMAIL, K.NAMA_KOTA, M.TGL_LAHIR, F.NAMA_FAKULTAS, P.NAMA_PRODI, B.NAMA_BIDANGILMU, M.JENIS_KELAMIN, M.ALAMAT_RUMAH, M.NO_TELP, M.FOTO, PE.ID_PENDAFTARAN, dp.ID_DETAIL_PELAKSANAAN 
from mahasiswa m, fakultas f, departemen d, program_studi p, bidangilmu b, kota k, pendaftaran pe, detail_pelaksanaan dp 
where f.ID_FAKULTAS=d.ID_FAKULTAS AND d.ID_DEPARTEMEN=p.ID_DEPARTEMEN AND b.ID_PRODI=p.ID_PRODI AND b.ID_BIDANGILMU=m.ID_BIDANGILMU AND pe.NIM=m.NIM AND m.ID_KOTA=k.ID_KOTA AND M.NIM='$nim' AND dp.ID_DETAIL_PELAKSANAAN='$detail'");
$data=mysql_fetch_array($x);

require '/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'yudisiumunair@gmail.com';          // SMTP username
$mail->Password = 'Yudisium!'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$emailmaster="yudisiumunair@gmail.com";
$usermaster="Informasi Yudisium";

$purpose=$data[2];
$userpurpose=$data[1];

$mail->setFrom($emailmaster, $usermaster);
$mail->addAddress($purpose, $userpurpose);   // Add a recipient
//echo $mail->addStringAttachment(file_get_contents($path), $namefile);
//$mail->AddAttachment(, '');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);

$bodyContent = "SELAMAT! ".$data[1]." telah LULUS YUDISIUM pada Tanggal : ".$date2." ";

$mail->Subject = 'INFORMASI YUDISIUM';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    header("location:pengelolaan-mahasiswa-yudisium.php");
    //echo '<script>window.close();</script>';
}
?>