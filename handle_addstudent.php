<?php

if(isset($_POST["submit"])){
    $fullname = $_POST["fullname"];
    $emailaddress = $_POST["emailaddress"];
    $phonenumber = $_POST["phonenumber"];
    $location = $_POST["location"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    
    // files
$photoname= $_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"]; 
$folder= "uploads/" .$cvname;

//cv
$cvname= $_FILES["cv"]["name"];
$cvtemp= $_FILES["cv"]["tmp_name"];
$cvfolder= "uploads/." .$photoname;

$sql = "INSERT INTO `students`(`fullname`, `emailaddress`, `phonenumber`, `location`, `dob`, `gender`, `photo`, `cv`) 
 VALUES ('$fullname','$emailaddress','$phonenumber','$location','$dob','$gender','$photoname','$cvname')";
    $result = mysqli_query($link, $sql);

    if(move_uploaded_file($cvtemp, $cvfolder)){
        echo "Cv has been uploaded Successfully";
    }else{
        echo "Error uploading your Cv";
    }

    if(move_uploaded_file($tempname, $folder)){
        echo "Image has been uploaded";
    }else{
        echo "Error uploading file";
    }

    if ($result){
        echo "Student Successfully added to the system";
    }else{
        echo "error executing this query $sql".mysqli_error($link);
    }
}