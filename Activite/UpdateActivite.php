<?php

include "../dbConnect.php";

$id = $_POST["id_activite"];
$titre = $_POST["titre"];
$description = $_POST["description"];
$destination = $_POST["destination"];
$prix = $_POST["prix"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$places_disponible = $_POST["places_disponible"];

$query = "UPDATE activite SET 
titre = '$titre',
description = '$description',
destination = '$destination',
prix = '$prix',
date_debut = '$date_debut',
date_fin = '$date_fin',
places_disponibles = '$places_disponible'
WHERE id_activite = '$id'
";

$conn = mysqli_query($db_connect,$query);

if($conn){
    header("Location: activite.php");
}

