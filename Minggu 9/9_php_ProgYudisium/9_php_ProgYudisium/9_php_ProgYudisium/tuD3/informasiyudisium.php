<?php

include "koneksi.php";
$id_kirim=$_REQUEST['idkirim'];
@$date2=date('Y-m-d');
$x=mysql_query("select TGL_PENGIRIMAN, NO_RESI from pengiriman where ID_PENGIRIMAN='$id_kirim'");
$z=mysql_query("select pes.ID_PEMESANAN, pel.EMAIL, pel.NAMA from pemesanan pes, pelanggan pel, penjualan pnj, pengiriman k
				where k.ID_PENJUALAN=pnj.ID_PENJUALAN and pnj.ID_PEMESANAN=pes.ID_PEMESANAN and pes.ID_PELANGGAN=pel.ID_PELANGGAN and k.ID_PENGIRIMAN='$id_kirim'");
$ar=mysql_fetch_array($z);
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

$emailmaster="faniummiqorir.sby@gmail.com";
$usermaster="Toko Fani Ummiqorir";

$purpose=$ar[1];
$userpurpose=$ar[2];

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

$bodyContent = "SELAMAT! ".$ar[0]." telah LULUS YUDISIUM pada Tanggal : ".$." ".$date2." ";

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
