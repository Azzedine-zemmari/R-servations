<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="flex justify-between px-2 py-3 bg-gray-800">
        <a href="../index.php"><img src="../images/logo-white.png" class="w-40" alt=""></a>
        <div class="flex gap-3 items-center">
            <img src="../images/avatar.png" class="w-10 h-10" alt="">
            <p class="text-white font-bold  " id="adminMenu">Hi,Admin</p>
        </div>
    </header>
    <div id="smallMenu" class=" hidden  absolute right-2 z-50 bg-gray-800 text-white border border-grey-200 rounded-lg w-24 md:hidden">
        <ul class=" pl-1">
            <li class="mt-1"><a class="font-bold border-b-2 border-b-green-600" href="../index.php">client</a></li>
            <li class="mt-2"><a class="font-bold border-b-2 border-b-red-600" href="../Activite/activite.php">activite</a></li>
            <li class="my-2"><a class="font-bold border-b-2 border-b-yellow-600" href="../Reserve/reservation.php">reservation</a></li>
        </ul>
    </div>
    <main class="flex">
    <aside class ="hidden md:flex flex-col shadow-sm w-56 bg-gray-800 h-screen">
        <div class="flex gap-5 items-center pl-3 py-2 border-b-2 border-green-600">
                <img src="../images/hire.png" class="w-8 h-8" alt="">
                <a href="../index.php" class="w-20 text-white">client</a>
            </div>
            <div class="flex gap-5 items-center pl-3 py-2 border-b-2 border-red-600">
                <img src="../images/travel-bag.png" class="w-8 h-8" alt="">
                <a href="./activite.php" class="w-20 text-white">activite</a>
            </div>
            <div class="flex gap-5 items-center pl-3 py-2 border-b-2 border-yellow-600">
                <img src="../images/reception-bell.png" class="w-8 h-8" alt="">
                <a href="../Reserve/reservation.php" class="w-20 text-white">reservation</a>
            </div>
        </aside>
        <section class="w-screen md:w-[calc(100%-224px)]">
        <?php
            include "../dbConnect.php";
            $query = "SELECT * FROM activite";
            $result = mysqli_query($db_connect,$query);
        ?>
         <div class="bg-gradient-to-r from-[#2f88da] to-[#07075a] px-5 py-3 flex justify-between w-full rounded-bl-lg rounded-br-lg">
            <h1 class="text-white font-bold">Activite table</h1>
            <a class="bg-green-400 text-white px-2 py-1 rounded-md" href="./addActivite.php">add activite</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left overflow-x-auto">
                <thead>
                    <tr>
                        <th class="px-2 md:px-6 py-3">#</th>
                        <th class="px-2 md:px-6 py-3">titre</th>
                        <th class="px-2 md:px-6 py-3">description</th>
                        <th class="px-2 md:px-6 py-3">destination</th>
                        <th class="px-2 md:px-6 py-3">prix</th>
                        <th class="px-2 md:px-6 py-3">date_debut</th>
                        <th class="px-2 md:px-6 py-3">date_fin</th>
                        <th class="px-2 md:px-6 py-3">places_disponible</th>
                        <th class="px-2 md:px-6 py-3">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                    <tr class="border-b">
                        <td class="px-2 md:px-6 py-3"><?php echo $data["id_activite"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["titre"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["description"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["destination"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["prix"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["date_debut"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["date_fin"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["places_disponibles"]; ?></td>
                        <td class="px-2 md:px-6 py-3 flex space-x-2">
                            <a class="bg-blue-400 text-white p-3 rounded-lg" href="./EditActivite.php?id_client=<?php echo $data["id_activite"] ?>">Edit</a>
                            <a class="bg-red-400 text-white p-3 rounded-lg" href="./DeleteActivite.php?id_client=<?php echo $data["id_activite"] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </section>
    </main>
    <script>
        const adminMenu = document.getElementById("adminMenu");
        const smallMenu = document.getElementById("smallMenu");
        adminMenu.addEventListener("click",()=>{
            smallMenu.classList.toggle("hidden")
        })
    </script>
</body>
</html>