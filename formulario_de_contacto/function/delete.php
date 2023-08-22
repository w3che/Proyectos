<?php
require ('../connection/connection.php');

$id = $_GET['id'];

$query = "DELETE FROM contactos WHERE id_contacto = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");
?>