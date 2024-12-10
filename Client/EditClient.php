<?php

include "../dbConnect.php";

$id = $_GET['client_id'];

$query = "SELECT * from client where id_client = ".$id;

$result = mysqli_query($db_connect,$query);

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>activite form</title>  
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="flex justify-center items-center mt-4">
        <form class="w-1/2 flex flex-col bg-white px-4 py-2 shadow sm:rounded-lg sm:px-10" action="UpdateClient.php" method="post">
            <input type="hidden" name="id_client" value="<?php echo $data['id_client']; ?>">
            <label for="">nom</label>
            <input type="text" name="nom" value="<?php echo $data['nom']; ?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">prenom</label>
            <input type="text" name="prenom" value="<?php echo $data['prenom']; ?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">email</label>
            <input type="text" name="email" value="<?php echo $data['email']; ?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">telephone</label>
            <input type="text" name="telephone" value="<?php echo $data['telephone']; ?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">adresse</label>
            <input type="text" name="adresse" value="<?php echo $data['adresse']; ?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">date_naissance</label>
            <input type="date" name="date_naissance" value="<?php echo $data['date_naissance']; ?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <button class="bg-blue-700 text-white px-4 py-2 mt-3">submit</button>
        </form>
    </div>
</body>
</html>