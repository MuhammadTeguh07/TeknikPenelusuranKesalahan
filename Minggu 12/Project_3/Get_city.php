<?php
include('DBconfig.php');
if($_POST['id'])
{
 $id=$_POST['id'];
 
 $stmt = $DB_con->prepare("SELECT * FROM tbl_city WHERE state_id=:id");
 $stmt->execute(array(':id' => $id));
 ?><option selected="selected">Select City :</option><?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
  <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
  <?php
 }
}
?>