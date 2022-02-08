<?php

$link=mysqli_connect(hostname:"localhost", username:"root", password:"", database:"brave");

if($link == true){
echo "SERVER CONNECTED SUCCESSFULLY";
}else{
echo "ERROR CONNECTING TO THE SERVER" .mysqli_connect_error();
}
