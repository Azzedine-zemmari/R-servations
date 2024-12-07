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
                <a href="client.php" class="w-20 text-[#424242]">client</a>
            </div>
            <div class="flex gap-5">
                <img src="./home-svgrepo-com.svg" class="w-5 h-5" alt="">
                <p class="w-20 text-[#424242]">activite</p>
            </div>
            <div class="flex gap-5">
                <img src="./home-svgrepo-com.svg" class="w-5 h-5" alt="">
                <p class="w-20 text-[#424242]">reservation</p>
            </div>
        </aside>
        <section class="w-4/5">
        <?php
            include "./dbConnect.php";
            $query = "SELECT * FROM client";
            $result = mysqli_query($db_connect,$query);
        ?>
        <a class="bg-green-400 text-white" href="client.php">add client</a>
        <table class="w-full text-left ">
            <thead>
                <tr>
                    <th class="px-2 md:px-6 py-3">#</th>
                    <th class="px-2 md:px-6 py-3">nom</th>
                    <th class="px-2 md:px-6 py-3">prenom</th>
                    <th class="px-2 md:px-6 py-3">email</th>
                    <th class="px-2 md:px-6 py-3">telephone</th>
                    <th class="px-2 md:px-6 py-3">adresse</th>
                    <th class="px-2 md:px-6 py-3">date_naissance</th>
                    <th class="px-2 md:px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr class="border-b">
                    <td class="px-2 md:px-6 py-3"><?php echo $data["id_client"]; ?></td>
                    <td class="px-2 md:px-6 py-3"><?php echo $data["nom"]; ?></td>
                    <td class="px-2 md:px-6 py-3"><?php echo $data["prenom"]; ?></td>
                    <td class="px-2 md:px-6 py-3"><?php echo $data["email"]; ?></td>
                    <td class="px-2 md:px-6 py-3"><?php echo $data["telephone"]; ?></td>
                    <td class="px-2 md:px-6 py-3"><?php echo $data["adresse"]; ?></td>
                    <td class="px-2 md:px-6 py-3"><?php echo $data["date_naissance"]; ?></td>
                    <td class="px-2 md:px-6 py-3">
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