<?php
include "connect.php";

#query
$sql ="SELECT * FROM `details`";
#execution of query
$result = mysqli_query($link,$sql);

#check execution
if ($result){
  $data = mysqli_num_rows($result);
if($data>0){
  echo "<h3>Table details</h3>";
}

$row = mysqli_fetch_array($result);
while ($row) {
  // code...
  $id=$row['id'];
  $firstname=$row['firstname'];
  $secondname=$row['secondname'];
}


}else {
echo "No data found in the database";

}
  ?>


















 ?>
