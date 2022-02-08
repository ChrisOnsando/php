<?php
include "connect.php";

if (isset($_POST["submit"])){
  $firstname=$_POST["firstname"];
  $secondname=$_POST["secondname"];
}

$sql ="DELETE FROM `details` WHERE `details` .`id`=1";
$result= mysqli_query($link,$sql);
?>
