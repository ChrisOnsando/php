<?php

include "config.php";

if (isset($_POST["register"])) {

    //pick values
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $emailaddress = $_POST["emailaddress"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];


    // validation

    //password length

    if (strlen($password) < 6) {
        $passwordError = "Password must have 6 characters";
        echo "$passwordError";
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }

    // Matching passwords
    if ($confirmpassword != $password) {
        $conPassError = "Passwords do not match";
        echo $confirmpassword;
    }


    if (empty($passwordError) and empty($conPassError)) {


        $sql = "INSERT INTO `users`( `firstname`, `secondname`, `emailaddress`, `password`)
              VALUES ('$firstname','$secondname','$emailaddress','$storePass')";


        $result = mysqli_query($link,$sql);

        if ($result){
            echo "You have been Registered";
            header("location:login.php");
        }else{
            echo "error executing this query $sql".mysqli_error($link);
        }
    }

     // close my connection
    mysqli_close($link);
}