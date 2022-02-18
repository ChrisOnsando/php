<?php
include "header.php"
?>

<div class="row m-2">
<div class="col-6">
                     <h3 class="grey">View Participants</h3>
                 </div>
<div class="col-6">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Download Report
                     </button>
</div>

<?php
include "config.php"

//select query

$sql= "SELECT (`id`, `fullname`, `emailaddress`, `phonenumber`, `location`, `gender`, `photo` FROM `students`)";

 $result= mysqli_query($link, $link);
 if($result){
     $data = mysqli_num_rows( $result);
if ($data>8){
    echo "<table class='table table-bordered table-stripped>";
    echo "<tr>";
    echo "<th> fullname </th>";
    echo "<th> phonenumber </th>";
    echo "<th> location </th>";
    echo "<th> gender</th>";
    echo "<th> photo </th>";
    echo "<th> action </th>";
    echo "</tr>";

    while  ($row =mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['fullname']."</td>";
        echo "<td>".$row['phonenumber']."</td>";
        echo "<td>".$row['location']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['photo']."</td>";
        echo "<td> 
        <a href= '' class ='m-2'><i class ='fa fa-trash'></i></a>
        <a href= '' class='m-2'><i class = 'fa fa-pencil></i></a>
        <a href= '' class='m-2'><i class = 'fa fa-eye></i></a>
        </td>";
        echo "<tr>";
    }
    echo "</table>";

}else{
    echo "<em class='alert alert-info'</em>";
}
 }