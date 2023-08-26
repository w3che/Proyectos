<?php
require ('../connection/connection.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$query = "INSERT INTO contactos (nombre,correo,asunto,mensaje) VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";
$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>