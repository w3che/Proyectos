<?php /*
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tickets";

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(!$connection){
        die("Database connection failed: " . mysqli_connect_error());
    }*/
?>

<?php
$hostname = "mysql-jcphp.alwaysdata.net";
$username = "jcphp_parcial1";
$password = "Pr0gr4m4c10nWEB";
$database = "jcphp_dbtickets";

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection){
    die("Conexión fallida: " . mysqli_connect_error());
}
?>