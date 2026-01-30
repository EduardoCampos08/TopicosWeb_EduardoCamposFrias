<?php
include("../config/conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Bienvenido $usuario</h2>";
    echo "<a href='usuarios.php'>Ir al CRUD de usuarios</a>";
} else {
    echo "Credenciales incorrectas";
}
?>

