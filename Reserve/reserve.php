<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
    include "../dbConnect.php";
    $query = "SELECT * FROM client";
    $Clients = mysqli_query($db_connect,$query);

    $query2 = "SELECT * FROM activite";
    $Activite = mysqli_query($db_connect,$query2);
?>
<body class="bg-gray-50">
    <div class="flex justify-center items-center mt-4">
    <form action="reserveAddprocess.php" method="post" class="w-full md:w-1/2 flex flex-col bg-white px-4 py-2 shadow rounded-lg px-10">
            <div class="flex flex-col">
                <label for="nom">Nom</label>
                <select name="client" id="client" class=" w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option value="" disabled>select client</option>
                    <?php while($data = mysqli_fetch_assoc($Clients)):?>
                    <option value="<?php echo $data["id_client"]?>"><?php echo $data["nom"]?></option>
                    <?php endwhile;?>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="activite">Activite</label>  
                <select name="activite" id=""class=" block w-full px-3 py-2 border border-gray-300 rounded-md">
                    <option value="" disabled>select activite</option>
                    <?php while($Data = mysqli_fetch_assoc($Activite)):?>
                        <option value="<?php echo $Data["id_activite"]?>"><?php echo $Data["titre"]?></option>
                    <?php endwhile;?>
                </select>
            </div>
        <div class="flex flex-col">
            <label for="date">date reservation</label>
            <input type="date" name="date" class="  w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="flex justify-center items-center space-x-4 my-4">
    <p class="mr-3">Status:</p>
    <div class="flex items-center space-x-1">
        <input type="radio" id="confirmee" name="status" value="Confirmee">
        <label for="confirmee1">Confirmee</label>
    </div>
    <div class="flex items-center space-x-1">
        <input type="radio" id="en_attente" name="status" value="En attente">
        <label for="en_attente">Attente</label>
    </div>
    <div class="flex items-center space-x-1">
        <input type="radio" id="confirmee2" name="status" value="Annulee">
        <label for="confirmee2">Annulee</label>
    </div>
</div>
        <div class="flex justify-end gap-3">
            <button class="bg-red-300 text-red-500 p-2 rounded-lg border border-red-500">close</button>
            <button class="bg-green-300 text-green-500 p-2 rounded-lg border border-green-500">submit</button>
        </div>
    </form>
</body>
</html>