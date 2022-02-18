<?php

$link = mysqli_connect(hostname:"localhost", username:"root", password:"", database:"brave");

if ($link == false){
    die("Error connecting".mysqli_connect_error($link));
}