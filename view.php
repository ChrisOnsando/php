<?php
if (isset($_GET["id"]) and !empty($_GET["id"])) {

$id = $_GET["id"];

$sql = "SELECT * FROM `students` WHERE id=$id";

$result = mysqli_query($link, $sql);

if ($result) {

    $data = mysqli_num_rows($result);

    if ($data == 1) {

        $row = mysqli_fetch_array($result);

        $fullname = $row['fullname'];
        $emailaddress = $row['emailaddress'];
        $phonenumber = $row['phonenumber'];
        $location = $row['location'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $photo = $row['photo'];
        $cv = $row['cv'];
    }
}else{
    echo "Error executing query $sql".mysqli_error($link);
   }
}
