<?php
$conn = new mysqli("127.0.0.1:3306", "root", "", "crud_musica");

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

?>