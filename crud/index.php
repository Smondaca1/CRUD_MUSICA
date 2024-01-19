<?php include("../database/db.php") ?>
<?php include("../crud/header.php")?>
<?php 

session_start();
require("../database/db.php");

if(empty($_SESSION["id"])) {
    header("Location: ../pages/login.php");
}
?>

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
            
            $sql= "SELECT m.id, m.title, m.author, m.url, m.created_at, m.image_file, g.genre AS genero FROM cancion AS m 
            INNER JOIN genero AS g
            ON m.id_genre=g.id";
            $cancion = $conn->query($sql);

            while($datos=$cancion->fetch_assoc()) {?>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?= $datos['id']; ?>
                    </th>
                    <td class="px-6 py-4">
                    <?= $datos['title']; ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos['author']; ?>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos['genero']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <a class="text-blue-600" href="<?php echo $datos['url']; ?>" target="_blank"><?php echo $datos['url']; ?></a>
                    </td>
                    <td class="px-6 py-4">
                    <?= $datos['image_file']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <a href="../pages/edit_music.php?id=<?= $datos['id']; ?>" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="../crud/index.php?id=<?= $datos['id']; ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php }
            ?>
            
        </tbody>
    </table>
</div>

</body>
</html>