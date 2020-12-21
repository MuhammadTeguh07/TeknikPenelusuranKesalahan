<?php 
include ('dbConfig.php');

    $x = $_POST['country'];
    $query = $db->query("SELECT country_name FROM countries WHERE country_id=$x");
    while($row = $query->fetch_assoc()){
        echo "Country : ".$row['country_name']."<br>";
    }

    $y= $_POST['state'];
    $query= $db->query("SELECT state_name FROM states WHERE state_id =$y ");
    while ($row = $query->fetch_assoc()) {
        echo "State : ".$row['state_name']."<br>";
    }

    $z= $_POST['city'];
    $query= $db->query("SELECT city_name FROM cities WHERE city_id =$z ");
    while ($row = $query->fetch_assoc()) {
        echo "City : ".$row['city_name']."<br>";
    }
?>