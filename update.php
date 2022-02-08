<?php
include "connect.php";

if (isset($_POST["submit"])){
  $firstname=$_POST["firstname"];
  $secondname=$_POST["secondname"];
}
$sql =UPDATE `details` SET `id`='[value-1]',`firstname`='[value-2]',`secondname`='[value-3]' WHERE 1;
$result= mysqli_query($link,$sql);
?>
