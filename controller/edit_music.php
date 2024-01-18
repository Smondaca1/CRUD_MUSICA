<?php
include "../database/db.php";
$id=$_GET["id"];
$sql=$conn->query("SELECT * from cancion where id=$id ");
?>
<?php include("../crud/header.php")?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-auto w-80" src="../assets/CRUD_logo.png" alt="logo">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Editar Música</h2>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
            <?php
        while($datos=$sql->fetch_object()){?>
        
                <div>
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input id="user" name="title" type="text" value="<?= $datos->title?> " class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900" >Autor</label>
                    <div class="mt-2">
                        <input value="<?= $datos->author?>" id="user" name="author" type="text" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">Género</label>
                        <select id="countries" name="id_genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Elige un genero</option>
                            <option id="1">Alternativo</option>
                            <option id="2">Electrónica</option>
                            <option id="3">Hip-hop</option>
                            <option id="4">Indie</option>
                            <option id="5">K-pop</option>
                            <option id="6">Pop</option>
                            <option id="7">Punk</option>
                            <option id="8">R&B</option>
                            <option id="9">Rap</option>
                            <option id="10">Reggaetón</option>
                            <option id="11">Rock</option>
                            <option id="12">Romántica</option>
                            <option id="13">Trap</option>
                
                        </select>
                </div>
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">URL</label>
                    <div class="mt-2">
                        <input value="<?= $datos->url?>" id="user" name="url" type="text" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="imagen" class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
                    </div>
                    <div class="mt-2">
                        <input value="<?= $datos->image_file?>" id="password" name="image_file" type="text" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

        <?php }
        ?>
         

                <div>
                    <input name="agregarbtn" type="submit" value="Agregar" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>