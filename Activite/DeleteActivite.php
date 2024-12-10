<?php

include "../dbConnect.php";

$id = $_GET["id_client"];

$query = "DELETE FROM activite where id_activite = '$id'";

$result = mysqli_query($db_connect,$query);

if($result){
    header("Location: ./activite.php");
}

