<?php

$host = "localhost";
$user = "M20031250";
$pass = "edu123";
$db   = "M20031250_db";


$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

