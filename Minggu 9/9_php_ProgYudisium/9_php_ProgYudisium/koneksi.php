<?php
$kon = mysqli_connect("localhost","root","");
if(!$kon){
    echo "Koneksi ke db gagal ".mysql_error();
}
else{
    mysqli_select_db($kon,"yudisium");
    echo "Connected successfully";
}
    
 
?> 