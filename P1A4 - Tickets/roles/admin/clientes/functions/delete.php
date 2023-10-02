<?php
require ('../../../../includes/db.php');

$id = $_GET['id'];

$query = "DELETE FROM cliente WHERE id_cliente = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");
?>