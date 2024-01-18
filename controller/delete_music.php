<?php

if(!empty($_GET["id"])){

$id=$_GET["id"];
$sql=$conn->query("DELETE from cancion where id=$id");


}






?>