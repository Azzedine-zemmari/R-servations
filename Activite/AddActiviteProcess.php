<?php 
include "../dbConnect.php";

$titre = $_POST['titre'];
$description = $_POST['description'];
$destination = $_POST['destination'];
$prix = $_POST['prix'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$places_disponible = $_POST['places_disponible'];


$query = "INSERT INTO activite(titre,description,destination,prix,date_debut,date_fin,places_disponibles) VALUES ('$titre','$description','$destination','$prix','$date_debut','$date_fin','$places_disponible')";

mysqli_query($db_connect,$query);

header("Location: ./activite.php");