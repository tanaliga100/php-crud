<?php

$host = 'localhost';
$root = 'root';
$password = '';
$database = 'crud';

$connection = mysqli_connect($host, $root, $password, $database);

if(mysqli_connect_error()){
    echo "Error: Unable to connect to mysql <br>";
    echo "Message :" .mysqli_connect_error();
}else{
    // echo "Successfully Connected";
}






?>