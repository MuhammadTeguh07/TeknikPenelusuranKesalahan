<?php

echo "POST berhasil <br >";
    $sJson = file_get_contents("php://input");
    $data=json_decode($sJson, true);
	//echo "baris : ".count($data);
	print_r($data);
	foreach($data as $key1 => $value1)
	{
		foreach($value1 as $key2 => $value2)
		   echo $data[$key1][$key2]." ";
		echo "<br >";   
	} 
	
/*	
    //$sJson = $_POST['json_string'];
	//echo "hasil POST : ".$sJson." \n"; 
	
if(isset($_POST['json_string'])) {
    $sJson = $_POST['json_string'];
	echo "hasil POST : ".$sJson." \n"; 
	//echo "POST berhasil <br >"; 
	$data=json_decode($sJson, true);
	//echo "baris : ".count($data);
	print_r($data);  
	foreach($data as $key1 => $value1)
	{
		foreach($value1 as $key2 => $value2)
		   echo $data[$key1][$key2]." ";
		echo "<br >";   
	}
*/	
	/*
	 di javascript
	 POST pengirim
	 json object (js data) --> json string (pakai stringify ) --> POST

	 di php 
	 POST penerima
	 POST diterima dalam bentuk json string --> json_decode --> php data
	 
	*/
/*	
}
 else {
		   echo "Noooooooob";
		 }
*/

?>