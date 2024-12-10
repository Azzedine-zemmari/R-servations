<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="flex justify-center items-center mt-4">
    <form action="AddReservationProcess.php" method="post" class="w-1/2 flex flex-col bg-white px-4 py-2 shadow sm:rounded-lg sm:px-10">
        <div class="flex justify-center gap-4 mb-4 ">
            <div class="flex flex-col">
                <label for="nom">Nom</label>
                <select name="" id=""class=" w-72 px-3 py-2 border border-gray-300 rounded-md">
                    <option value="" disabled>select client</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="activite">Activite</label>  
                <select name="activite" id=""class=" w-72 px-3 py-2 border border-gray-300 rounded-md">
                    <option value="" disabled>select activite</option>
                </select>
            </div>
        </div>
        <div class="mx-12">
            <label for="date">date reservation</label>
            <input type="date" name="date"class="block  w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="flex justify-center items-center space-x-4 my-4">
    <p class="mr-3">Status:</p>
    <div class="flex items-center space-x-1">
        <input type="radio" id="confirmee1" name="status" value="Confirmee">
        <label for="confirmee1">Confirmee</label>
    </div>
    <div class="flex items-center space-x-1">
        <input type="radio" id="en_attente" name="status" value="En attente">
        <label for="en_attente">En attente</label>
    </div>
    <div class="flex items-center space-x-1">
        <input type="radio" id="confirmee2" name="status" value="Confirmee">
        <label for="confirmee2">Confirmee</label>
    </div>
</div>
        <div class="flex justify-end gap-3">
            <button class="bg-red-300 text-red-500 p-2 rounded-lg border border-red-500">close</button>
            <button class="bg-green-300 text-green-500 p-2 rounded-lg border border-green-500">submit</button>
        </div>
    </form>
</body>
</html>