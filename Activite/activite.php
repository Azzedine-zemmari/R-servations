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
        <img src="../images/logo-white.png" class="w-40" alt="">
        <div class="flex gap-3 items-center">
            <img src="../images/avatar.png" class="w-10 h-10" alt="">
            <p class="text-white font-bold  ">Hi,Admin</p>
        </div>
    </header>
    <main class="flex">
    <aside class ="flex flex-col shadow-sm w-56 bg-gray-800 h-screen">
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
        <section class="w-full">
        <?php
            include "../dbConnect.php";
            $query = "SELECT * FROM activite";
            $result = mysqli_query($db_connect,$query);
        ?>
         <div class="bg-gradient-to-r from-[#2f88da] to-[#07075a] px-5 py-3 flex justify-between w-full rounded-bl-lg rounded-br-lg">
            <h1 class="text-white font-bold">Activite table</h1>
            <a class="bg-green-400 text-white px-2 py-1 rounded-md" href="./addActivite.php">add activite</a>
        </div>
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
        </section>
    </main>
</body>
</html>