<?php

include "./dbConnect.php";

$ID = $_GET["client_id"];

$query = "DELETE FROM client WHERE id_client = ".$ID;

$conn = mysqli_query($db_connect,$query);

if($conn){
    header("Location: index.php");
}