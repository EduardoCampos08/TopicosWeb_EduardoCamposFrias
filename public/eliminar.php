<?php
include("../config/conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id=$id";
$conexion->query($sql);

header("Location: usuarios.php");
?>

