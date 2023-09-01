<?php
$hostname = "mysql-jcphp.alwaysdata.net";
$username = "jcphp_parcial1";
$password = "Pr0gr4m4c10nWEB";
$database = "jcphp_dbnotas";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection){
    die("Conexión fallida: " . mysqli_connect_error());
}
?>