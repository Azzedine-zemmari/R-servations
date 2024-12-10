<?php

include "../dbConnect.php";

$name = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$adress = $_POST['adress'];
$date = $_POST['date'];

$query = "INSERT INTO client(nom,prenom,email,telephone,adresse,date_naissance) VALUES ('$name','$prenom','$email','$tel','$adress','$date')";

mysqli_query($db_connect,$query);

header("Location: ../index.php");