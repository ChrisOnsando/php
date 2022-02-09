<?php
include "connect.php";

if (isset($_POST["submit"]) and !empty($_POST["id"])){

$id=$_POST["id"];
$up_firstname=$_POST["fisrtname"];
$up_secondname=$_POST["secondname"];

$up_sql="UPDATE `details` SET `firstname`='$up_firstname',`secondname`='$up_secondname' WHERE id=$id";
$up_result=mysqli_query($link,$up_sql);

if ($up_result){
  echo "Record has been updated";
  header(header:"location:select.php");
}else{
  echo "error updating record $up_sql".mysqli_error($link);
}


}else {
  // code...
if (isset($_POST["submit"]) and !empty($_GET["id"])){

$id= $_GET["id"];
$sql="SELECT * FROM `details` WHERE id=$id";
$result=mysqli_query($link,$sql);

if ($result){
  $data = mysqli_num_rows($result);
  if ($data==1){
    $row=mysqli_fetch_array($result);
    $firstname=$row["firstname"];
    $secondname=$row["secondname"];
  }
}else{
  echo "Error executing query $sql".mysqli_error($link);
}

}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
  </head>
  <body>
    <h2>UPDATE THIS RECORD</h2>
    <form action="update.php" method="post">
      <div>
        <label> First Name </label>
        <input type="text" name="firstname"value="<?php echo $firstname;?>"required>
      </div>
      <br>
      <div>
        <label> Second Name </label>
        <input type="text" name="secondname" value="<?php echo $secondname;?>"required>
      </div>
      <div>
<label>ID</label>
        <input type="text" name="id" value="<?php echo $_GET["id"];?>">
      </div>
      
      <input type="submit" name="submit" value="Update">
    </form>
  </body>
</html>

