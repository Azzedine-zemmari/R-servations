<?php
include("../dbConnect.php");

$ID = $_GET['resevId'];

$query = "DELETE FROM reservation where id_reservation = '$ID'";

if(mysqli_query($db_connect,$query)){
    header("Location: reservation.php");
}
else{
    echo "🙆‍♂️";
}

