<?php
require ('../../../../includes/db.php');

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$query = "UPDATE cliente SET nombre_cliente = '$nombre', email = '$correo' WHERE id_cliente = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");
?>