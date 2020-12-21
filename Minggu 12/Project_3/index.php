<?php
include_once 'DBconfig.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dynamic Dependent Select Box using jQuery and PHP</title>
<script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
 $(".country").change(function()
 {
  var id=$(this).val();
  var dataString = 'id='+ id;
 
  $.ajax
  ({
   type: "POST",
   url: "Get_state.php",
   data: dataString,
   cache: false,
   success: function(html)
   {
      $(".state").html(html);
   } 
   });
  });
 
 
 $(".state").change(function()
 {
  var id=$(this).val();
  var dataString = 'id='+ id;
 
  $.ajax
  ({
   type: "POST",
   url: "Get_city.php",
   data: dataString,
   cache: false,
   success: function(html)
   {
    $(".city").html(html);
   } 
   });
  });
 
});
</script>
<style>
label
{
font-weight:bold;
padding:10px;
}
div
{
 margin-top:100px;
}
select
{
 width:200px;
 height:35px;
}
</style>
</head>

<body>
<center>
<div>
<form action="terima_data.php" method="post">
<label>Country :</label> 
<select name="country" class="country">
<option selected="selected">--Select Country--</option>
<?php
 $stmt = $DB_con->prepare("SELECT * FROM tbl_country");
 $stmt->execute();
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
        <option value="<?php echo $row['country_id']; ?>"><?php echo $row['country_name']; ?></option>
        <?php
 } 
?>
</select>

<label>State :</label> <select name="state" class="state">
<option selected="selected">--Select State--</option>
</select>


<label>City :</label> <select name="city" class="city">
<option selected="selected">--Select City--</option>
</select>
<input type="submit" name="submit" value="Submit"/>
</form>
</div>
<br />
<a href="http://www.codingcage.com/">Coding Cage</a>
</center>
</body>
</html>