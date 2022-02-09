<?php
include "connect.php";

if (isset($_POST["submit"]) and !empty($_POST["id"])){
$id =$_POST["id"];

echo $sql ="DELETE FROM `details` WHERE id=$id";
$result= mysqli_query($link,$sql);
if ($result){
  echo "You deleted the record";
  header(header: "location:select.php");
}else{
echo "error executing your query $sql".mysqli_error($link);
}

}else{
echo "try deleting the record";

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
  </head>
  <body>
    <h2>DELETE THIS RECORD</h2>
    <form action="delete.php" method="post">

      <div>
        <label>Are you sure you want to delete this record </label>
        <input type="text" name="id" value="<?php echo $_GET["id"]; ?>">
      </div>

      <div>
<input type="submit" value="Yes" name="submit">
<a href="select.php">No</a>
</div>
      
    </form>
  </body>
</html>
