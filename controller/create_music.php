<?php
include("../database/db.php");

function verificar_yt($url) { 
     preg_match('#^(?:https?://)?(?:www\.)?(?:youtube\.com(?:/embed/|/v/|/watch\?v=))([\w-]{11})(?:.+)?$#x', $url, $r); 
     return (isset($r[1]) && !empty($r[1])) ? $r[1] : false; 
  
}
if(!empty($_POST["agregarbtn"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["autor"]) and !empty($_POST["genero"]) and !empty($_POST["url"]) and !empty($_POST["imagen"])){
        
        $nombre = $_POST["nombre"];
        $autor = $_POST["autor"];
        $genero = $_POST["genero"];
        $url = $_POST["url"];
        $imagen = $_POST["imagen"];

        $sql = $conn->query("INSERT into cancion(title,author,id_genre,url,image_file)values('$nombre', '$autor',$genero,'$url','$imagen')");
        if ($sql==1){
            if(verificar_yt($url)){
                echo '<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                  <div>
                    <p class="font-bold">Canción agregada satisfactoriamente</p>
                    <p class="text-sm">¡Gracias por usar nuestro servicio!</p>
                  </div>
                </div>
              </div>';
            }else{
                echo '
                <div role="alert">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        ¡ Ha ocurrido un error !
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>Por favor ingrese una url válido</p>
                    </div>
                </div> ';
            }
        }else{ 
            echo '<div class="alert alert-sucess"> Error al registrar</div>';
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

?>