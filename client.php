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
<body class="bg-gray-50">
    <div class="flex justify-center items-center mt-4">
        <form class="w-1/2 flex flex-col bg-white px-4 py-2 shadow sm:rounded-lg sm:px-10" action="addclient.php" method="post">
            <label for="">nom</label>
            <input type="text" name="nom" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">prenom</label>
            <input type="text" name="prenom" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">email</label>
            <input type="text" name="email" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">tel</label>
            <input type="text" name="tel" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">adress</label>
            <input type="text" name="adress" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">date naissance</label>
            <input type="date" name="date" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <button class="bg-blue-700 text-white px-4 py-2 mt-3">submit</button>
        </form>
    </div>
</body>
</html>