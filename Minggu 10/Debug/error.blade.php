<?php 
/*
// NO 1 
$file_var = fopen("myfile.txt", "r"); 
  
if (!file_exists("myfile.txt")) { 
    die("Sorry Error!! file does not exists"); 
} 
else { 
    fopen("myfile.txt", "r"); 
} 
//Sorry Error!! file does not exists

//NO 2
$file=fopen("mytestfile.txt","r");

//NO 3
if(file_exists("mytestfile.txt")) {
  $file = fopen("mytestfile.txt", "r");
} else {
  die("Error: The file does not exist.");
}
//Error: The file does not exist.

//NO 4
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
  }
  set_error_handler("customError");
  echo($test);
//Error: [8] Undefined variable: test
  
//NO 5
$test=2;
if ($test>=1) {
  trigger_error("Value must be 1 or below");
}
// Notice: Value must be 1 or below in C:\xampp\htdocs\Tek Penelusuran Kesalahan\Minggu 10\Debug\coba.blade.php on line 36

//NO 6
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Ending Script";
    die();
  }
  set_error_handler("customError",E_USER_WARNING);
  $test=2;
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }
//Error: [512] Value must be 1 or below
//Ending Script

//NO 7
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "Webmaster has been notified";
    error_log("Error: [$errno] $errstr",1,
    "someone@example.com","From: webmaster@example.com");
  }
  set_error_handler("customError",E_USER_WARNING);
  $test=2;
  if ($test>=1) {
    trigger_error("Value must be 1 or below",E_USER_WARNING);
  }
 //Error: [512] Value must be 1 or below
//Webmaster has been notified
//( ! ) Warning: error_log(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() in C:\xampp\htdocs\Tek Penelusuran Kesalahan\Minggu 10\Debug\coba.blade.php on line 59
*/
?>
