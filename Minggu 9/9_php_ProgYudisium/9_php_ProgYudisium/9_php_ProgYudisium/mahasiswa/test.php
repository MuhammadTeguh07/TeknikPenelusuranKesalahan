<form action="" method="POST">
    <input type="file" name="file" value=""/>
	 <button type="submit" class="btn" name="submit">Simpan</button>
</form>

    <?php
if (isset($_POST['submit'])) {
	$file=$_REQUEST['file'];
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("doc_libraray/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      header('Location: '.site_url());
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "doc_libraray/" . $_FILES["file"]["name"]);
  echo "Stored in: " . "doc_libraray/" . $_FILES["file"]["name"];
  header('Location: '.$newURL);
      }
    }
  }
else
  {
  echo "Invalid file";
  } 
}
  ?>