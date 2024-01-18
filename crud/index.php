<?php include("../database/db.php") ?>
<?php include("../crud/header.php")?>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID 
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Autor
                </th>
                <th scope="col" class="px-6 py-3">
                    Género
                </th>
                <th scope="col" class="px-6 py-3">
                    URL
                </th>
                <th scope="col" class="px-6 py-3">
                    Imagen
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../database/db.php";
            $sql=$conn->query("SELECT * from cancion");
            while($datos=$sql->fetch_object()) {?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $datos->id ?>
                    </th>
                    <td class="px-6 py-4">
                    <?= $datos->title ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos->author ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos->id_genre ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos->url ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos->image_file ?>
                    </td>
                    <td class="px-6 py-4">
                        <a href="../pages/edit_music.php?id=<?= $datos->id?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="../crud/index.php?id=<?= $datos->id?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php }
            ?>
            
        </tbody>
    </table>
</div>

</body>
</html>