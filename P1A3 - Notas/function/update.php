<?php
require ('../connection/connection.php');

$id = $_GET['id'];
$nota = $_POST['nota'];

$query = "UPDATE notas SET nota = '$nota' WHERE id_nota = '$id'";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");
?>