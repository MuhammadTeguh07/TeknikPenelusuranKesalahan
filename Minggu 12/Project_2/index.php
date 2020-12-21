<?php 
    // Include the database config file 
    include_once 'dbConfig.php'; 
     
    // Fetch all the country data 
    $query = "SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC"; 
    $result = $db->query($query); 
?>

<!-- Country dropdown -->
<form action="terima_data.php" method="post">
    <!-- Country dropdown -->
    <select id="country" name="country">
        <option value="">Select Country</option>
        <?php 
        if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){  
                echo '<option value="'.$row['country_id'].'" name="'.$row['country_id'].'">'.$row['country_name'].'</option>'; 
            } 
        }else{ 
            echo '<option value="">Country not available</option>'; 
        } 
        ?> 
    </select>
	
    <!-- State dropdown -->
    <select id="state" name="state">
        <option value="">Select Country First</option>
    </select>
	
    <!-- City dropdown -->
    <select id="city" name="city">
        <option value="">Select State First</option>
    </select>
	
    <input type="submit" name="submit" value="Submit"/>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#country').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select State First</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select Country First</option>');
            $('#city').html('<option value="">Select State First</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
</script>


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