<?php

include "../dbConnect.php";
$id = $_POST['id_client'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$date = $_POST['date_naissance'];

$query = "UPDATE client SET 
    nom = '$nom', 
    prenom = '$prenom', 
    email = '$email', 
    telephone = '$telephone', 
    adresse = '$adresse', 
    date_naissance = '$date' 
    WHERE id_client = '$id'";

$conn = mysqli_query($db_connect,$query);
if($conn){
    header("Location: ../index.php");
}
?>