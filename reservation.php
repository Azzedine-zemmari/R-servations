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
                <a href="activite.php" class="w-20 text-[#424242]">activite</a>
            </div>
            <div class="flex gap-5">
                <img src="./home-svgrepo-com.svg" class="w-5 h-5" alt="">
                <p class="w-20 text-[#424242]">reservation</p>
            </div>
        </aside>
        <section class="w-4/5">
        <?php
            include "./dbConnect.php";
            $query = "
            SELECT reservation.id_reservation,reservation.date_reservation, reservation.status, client.nom, activite.titre 
            FROM reservation 
            JOIN client ON reservation.id_client = client.id_client
            JOIN activite ON reservation.id_activite = activite.id_activite"; 
            $result = mysqli_query($db_connect,$query);
        ?>
        <a class="bg-green-400 text-white" href="client.php">add client</a>
        <div class="overflow-x-auto">
            <table class="w-full text-left table-auto">
                <thead>
                    <tr>
                        <th class="px-2 md:px-6 py-3">#</th>
                        <th class="px-2 md:px-6 py-3">client</th>
                        <th class="px-2 md:px-6 py-3">activite</th>
                        <th class="px-2 md:px-6 py-3">date_reservation</th>
                        <th class="px-2 md:px-6 py-3">status</th>
                        <th class="px-2 md:px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                    <tr class="border-b">
                        <td class="px-2 md:px-6 py-3"><?php echo $data["id_reservation"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["nom"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["titre"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["date_reservation"]; ?></td>
                        <td class="px-2 md:px-6 py-3"><?php echo $data["status"]; ?></td>
                        <td class="px-2 md:px-6 py-3 flex space-x-2">
                            <a class="bg-blue-400 text-white p-3 rounded-lg" href="edit.php">Edit</a>
                            <a class="bg-red-400 text-white p-3 rounded-lg" href="delete.php">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        </section>
    </main>
</body>
</html>