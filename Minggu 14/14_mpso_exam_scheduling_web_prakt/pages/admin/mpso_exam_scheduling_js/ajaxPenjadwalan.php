<?php
session_start();
include('../../../koneksi.php');
if(!empty($_POST["KODEFAKULTAS"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM prodi WHERE KODEFAKULTAS = ".$_POST['KODEFAKULTAS']." AND ORDER BY NAMAPRODI ASC"; 
    $result = $db->query($query);
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">-- Pilih --</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['KODEPRODI'].'">'.$row['NAMAPRODI'].'</option>'; 
        } 
    }else{  
        echo '<option value="">State not available</option>'; 
    }
} 
?>