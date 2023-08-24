<?php
require ('../connection/connection.php');

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$query = "UPDATE contactos SET nombre = '$nombre', correo = '$correo', asunto = '$asunto', mensaje = '$mensaje' WHERE id_contacto = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");
?>