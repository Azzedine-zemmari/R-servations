<?php

include "./dbConnect.php";

$name = $_POST['client'];
$activite = $_POST['activite'];
$date = $_POST['date'];
$status = $_POST["status"];

$query = "INSERT INTO reservation (id_client,id_activite,date_reservation,status) values('$name','$activite','$date','$status')";

if(mysqli_query($db_connect,$query)){
    header("Location: index.php");
}