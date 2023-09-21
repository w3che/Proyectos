<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tickets";

    $connection = mysqli_connect($hostname, $username, $password, $database);

    if(!$connection){
        die("Database connection failed: " . mysqli_connect_error());
    }// else {
    //    echo "Connexion exitosa a la base de datos: {$database}";
    //}
?>