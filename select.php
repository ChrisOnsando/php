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

while($row = mysqli_fetch_array($result)){
  // code...
  echo "" . $id=$row['id'];
echo "" .   $firstname=$row['firstname'];
echo "" .   $secondname=$row['secondname'];
echo "<a href='delete.php?id=".$row['id']."'><button>Delete</button></a>";
echo "<a href='update.php?id=".$row['id']."'><button>Update</button></a>";
echo "<hr>";

}


}else {
echo "No data found in the database";

}


















 ?>
