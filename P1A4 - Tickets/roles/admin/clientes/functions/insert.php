<?php
require ('../../../../includes/db.php');

$nombre = $_POST['nombre'];

$query = "INSERT INTO cliente (nombre_cliente) VALUES ('$nombre')";
$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>