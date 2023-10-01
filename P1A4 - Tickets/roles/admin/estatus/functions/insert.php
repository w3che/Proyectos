<?php
require ('../../../../includes/db.php');

$nombre = $_POST['nombre'];

$query = "INSERT INTO estatus (nombre_estatus) VALUES ('$nombre')";
$ejecutar = mysqli_query($connection, $query);
header("Location: ../index.php");
?>