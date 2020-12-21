<?php 
include ('DBConfig.php');

    $x = $_POST['country'];
    $query = $db->query("SELECT country_name FROM tbl_country WHERE country_id=$x");
    while($row = $query->fetch_assoc()){
        echo "Country : ".$row['country_name']."<br>";
    }

    $y= $_POST['state'];
    $query= $db->query("SELECT state_name FROM tbl_state WHERE state_id =$y ");
    while ($row = $query->fetch_assoc()) {
        echo "State : ".$row['state_name']."<br>";
    }

    $z= $_POST['city'];
    $query= $db->query("SELECT city_name FROM tbl_city WHERE city_id =$z ");
    while ($row = $query->fetch_assoc()) {
        echo "City : ".$row['city_name']."<br>";
    }
?>