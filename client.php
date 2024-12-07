<?php

include "./dbConnect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client form</title>  
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="addclient.php" method="post">
        <label for="">nom</label>
        <input type="text" name="nom">
        <label for="">prenom</label>
        <input type="text" name="prenom">
        <label for="">email</label>
        <input type="text" name="email">
        <label for="">tel</label>
        <input type="text" name="tel">
        <label for="">adress</label>
        <input type="text" name="adress">
        <label for="">date naissance</label>
        <input type="date" name="date">
        <button>submit</button>
    </form>
</body>
</html>