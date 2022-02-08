<?php
include "connect.php";
if (isset($_POST["submit"])){
  $firstname=$_POST["firstname"];
  $secondname=$_POST["secondname"];

$sql ="INSERT INTO `details`(`firstname`, `secondname`) VALUES ('$firstname','$secondname')";
$result= mysqli_query($link,$sql);

 if ($result){
  echo "YOUR RECORD HAS BEEN ADDED SUCCESSFULLY";
}else {
echo "ERROR ADDING A RECORD $sql".mysqli_error($link);

}

}else {
echo "<h3>please fill the form </h3>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Post method</title>
  </head>
  <body>
    <form action="postmethod.php" method="post">
      <div>
        <label for="First Name"></label>
        <input type="text" name="firstname"required>
      </div>
      <br>
      <div>
        <label for="Second Name"></label>
        <input type="text" name="secondname" required>
      </div>
      <br>
      <input type="submit" name="submit" value="submit">
    </form>
    </body>
</html>
