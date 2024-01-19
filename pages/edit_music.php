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
             <input type="hidden" name="id" value="<?= $_GET["id"]?> ">   
            <?php
            include "../controller/edit_music.php";
        while($datos=$sql->fetch_object()){?>
        
                <div>
                    <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                    <div class="mt-2">
                        <input id="user" name="nombre" type="text" value="<?= $datos->title?> " class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900" >Autor</label>
                    <div class="mt-2">
                        <input value="<?= $datos->author?>" id="user" name="autor" type="text" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="user" class="block text-sm font-medium leading-6 text-gray-900">Género</label>
                        <select id="countries" name="genero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Elige un genero</option>
                            <?php 
                                $consulta = "SELECT * FROM genero";
                                $ejecutar = mysqli_query($conn, $consulta) or die(mssqli_error($conn));
                            ?>
                            <?php foreach ($ejecutar as $opciones): ?> 
                                <option value="<?php echo $opciones["id"] ?>"><?php echo $opciones["genre"] ?></option>
                            <?php endforeach ?>
                
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
                        <input value="<?= $datos->image_file?>" id="image_id" name="imagen" type="text" class="block w-full px-2 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

        <?php }
        ?>
         

                <div>
                    <input name="agregarbtn" type="submit" value="Editar" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>