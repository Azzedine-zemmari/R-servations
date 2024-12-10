<?php

include "../dbConnect.php";

$id = $_GET['id_client'];

$query = "SELECT * from activite where id_activite = " . $id;

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
        <form class="w-1/2 flex flex-col bg-white px-4 py-2 shadow sm:rounded-lg sm:px-10" action="UpdateActivite.php" method="post">
            <label for="">titre</label>
            <input type="text" name="titre" value="<?php echo $data['titre']?>"   class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">description</label>
            <input type="text" name="description" value="<?php echo $data['destination']?>"  class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">destination</label>
            <input type="text" name="destination" value="<?php echo $data["description"]?>"  class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">prix</label>
            <input type="text" name="prix"  value="<?php echo $data["prix"]?>" class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">date_debut</label>
            <input type="date" name="date_debut" value="<?php echo $data["date_debut"]?>"  class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">date_fin</label>
            <input type="date" name="date_fin" value="<?php echo $data["date_fin"]?>"  class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <label for="">places_disponible</label>
            <input type="text" name="places_disponible" value="<?php echo $data["places_disponibles"]?>"  class="block w-full px-3 py-2 border border-gray-300 rounded-md">
            <button class="bg-blue-700 text-white px-4 py-2 mt-3">submit</button>
        </form>
    </div>
</body>
</html>