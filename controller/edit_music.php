<?php
if(!empty($_POST["agregarbtn"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["autor"]) and !empty($_POST["genero"]) and !empty($_POST["url"]) and !empty($_POST["imagen"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $url = $_POST["url"];
        $imagen = $_POST["imagen"];

        $sql=$conn->query("UPDATE cancion set title= '$nombre' ,author = '$autor' , id_genre = '$genero' , url= '$url' , image_file = '$imagen' where id =$id");
        if ($sql==1) {
            header("Location: ../crud/index.php");
        } else {
            # code...
        }
        
    } else {
        echo '
        <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                ¡ Ha ocurrido un error !
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>Por favor completar todos los campos solicitados.</p>
            </div>
        </div> ';
    }
}