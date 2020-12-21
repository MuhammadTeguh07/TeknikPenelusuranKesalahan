<?php
$kon=mysql_connect("localhost","root","");
if(!$kon)
echo "Koneksi ke db gagal, ".mysql_error();
mysql_select_db("yudisium",$kon);
?>