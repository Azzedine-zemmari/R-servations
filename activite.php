<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="flex justify-between px-2 py-3 bg-blue-500">
        <h2>Travel</h2>
        <div class="flex gap-3 items-center">
            <img src="./search-svgrepo-com.svg" class="w-5 h-5" alt="">
            <p class="text-white font-bold  ">Hi,Admin</p>
        </div>
    </header>
    <main class="flex">
        <aside class ="flex flex-col shadow-sm w-1/5 border border-red-500 h-screen">
            <div class="flex gap-5">
                <img src="./home-svgrepo-com.svg" class="w-5 h-5" alt="">
                <a href="index.php" class="w-20 text-[#424242]">client</a>
            </div>
            <div class="flex gap-5">
                <img src="./home-svgrepo-com.svg" class="w-5 h-5" alt="">
                <p class="w-20 text-[#424242]">activite</p>
            </div>
            <div class="flex gap-5">
                <img src="./home-svgrepo-com.svg" class="w-5 h-5" alt="">
                <a href="./reservation.php" class="w-20 text-[#424242]">reservation</a>
            </div>
        </aside>
        <section class="w-4/5">
        <?php
            include "./dbConnect.php";
            $query = "SELECT * FROM activite";
            $result = mysqli_query($db_connect,$query);
        ?>
        <a class="bg-green-400 text-white" href="addActivite.php">add activite</a>
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
                        <a class="bg-blue-400 text-white p-3 rounded-lg" href="edit.php">Edit</a>
                        <a class="bg-red-400 text-white p-3 rounded-lg" href="delete.php">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        </section>
    </main>
</body>
</html>