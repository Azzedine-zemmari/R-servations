<?php

$host = "localhost";
$userName = "root";
$password = "";
$dbName = "reservation";

$db_connect = mysqli_connect($host,$userName,$password,$dbName);


if(!$db_connect){
    echo "Error".mysqli_error();
}
