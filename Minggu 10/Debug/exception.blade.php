<?php 
/*
//NO 1
function valid_division($x, $y) { 
    if($y != 0) { return true;  } 
    else { 
        throw new Exception("Why should not be equal to 0"); 
    } 
} 
try { 
    valid_division(2, 0); 
    echo "Valid division"; 
} 
catch(Exception $e) { 
    echo "Error\n"; 
    echo $e->getmessage(); 
} 
//Error Why should not be equal to 0

//NO 2
function checkNum($number)
  {
  if($number>1)
    {
    throw new Exception("Value must be 1 or below");
    }
  return true;
  } 
checkNum(2);
//Fatal error: Uncaught Exception: Value must be 1 or below in C:\xampp\htdocs\Tek Penelusuran Kesalahan\Minggu 10\Debug\exception.blade.php on line 25
//Exception: Value must be 1 or below in C:\xampp\htdocs\Tek Penelusuran Kesalahan\Minggu 10\Debug\exception.blade.php on line 25

//NO 3
function checkNum($number)
  {
 if($number>1)    {    throw new Exception("Value must be 1 or below");    }
  return true;
  } 
try  {
  checkNum(2);
  echo 'If you see this, the number is 1 or below';
 } 
catch(Exception $e)  {  echo 'Message: ' .$e->getMessage();  }
//Message: Value must be 1 or below

//NO 4  
class customException extends Exception
  {
  public function errorMessage()    {
    	$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    	.': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    	return $errorMsg;
    	}
  }
$email = "deepakdeveloper.dwij@gmail.................com";
try  {
   if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)    {
    		throw new customException($email);
    		}
  } 
   catch (customException $e)  {
  		echo $e->errorMessage();
  		}
//Error on line 61 in C:\xampp\htdocs\Tek Penelusuran Kesalahan\Minggu 10\Debug\exception.blade.php: deepakdeveloper.dwij@gmail.................com is not a valid E-Mail address

//NO 5
class customException extends Exception
{
    public function errorMessage()  {
           $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
            .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
          return $errorMsg;
      }
}
$email = "deepakdwij@example.com";
try  {
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
\    		throw new customException($email);
    		}
  if(strpos($email, "example") !== FALSE)    {
    		throw new Exception("$email is an example e-mail");
    		}
  }
     catch (customException $e)  { 	 echo $e->errorMessage();	 }
     catch(Exception $e)  {	echo $e->getMessage();  }
//deepakdwij@example.com is an example e-mail

//NO 6
class customException extends Exception
  {
  public function errorMessage()    {
    		$errorMsg = $this->getMessage().' is not a valid E-Mail address.';
    		return $errorMsg;
    		}
  }
$email = "deepakdeveloper.dwij@gmail.com";
try
  {
  	try {
    		if(strpos($email, "gmail") !== FALSE)
      			{
      			throw new Exception($email);
      			}
    	   }
  		catch(Exception $e)
    			{
   			 throw new customException($email);
    			}
  }
catch (customException $e)  {
  	echo $e->errorMessage();
  	}
//deepakdeveloper.dwij@gmail.com is not a valid E-Mail address.

//NO 7
function myException($exception){
    echo "<b>Exception:</b> " , $exception->getMessage();
    }
set_exception_handler('myException');
throw new Exception('Uncaught Exception occurred');
//Exception: Uncaught Exception occurred
*/
?> 

