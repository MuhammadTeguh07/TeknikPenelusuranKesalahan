<?php

include "include/koneksi.php";

?>



<!DOCTYPE HTML>  
<html>
<head>

<style>
.error {color: #FF0000;}
</style>

</head>

<body>  

<?php
// define variables and set to empty values
//$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$name = $email = $gender = $comment = $website = "";
$prodiErr  = "";
$prodi =  "";

 $result = mysql_query("SELECT NAMAPRODI FROM prodi"); 
 while($row = mysql_fetch_array($result)) 
        { 
	//echo "$row[NAMAPRODI] <br/>";
        /*echo '<form action="">';*/ 
            echo "<select name='NAMAPRODI'>"; 
            echo "<option value = '$row[NAMAPRODI]' ></option>"; 
            echo "</select>"; 
            }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["prodi"])) {
    $prodiErr = "Prodi is required";
  } else {
    $prodi = test_input($_POST["prodi"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z 0-9]*-/",$prodi)) {
      $nameErr = "Only letters and ";
    }
  }
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Prodi: <input type="text" name="prodi" value="<?php echo $prodi;?>">
  <span class="error">* <?php echo $prodiErr;?></span>
  <br><br>
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $prodi;
echo "<br>";

//$id = 1;
//$tambah = "INSERT INTO customer ( id, nama, email,website,comment, gender) VALUES"
 //                ."('$id','$name' , '$email', '$website','$comment','$gender')";
//$result = mysql_query($tambah);

?>

</body>
</html>
