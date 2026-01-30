<?php
include("../config/conexion.php");
$resultado = $conexion->query("SELECT * FROM usuarios");
?>

<h2>Usuarios</h2>

<form action="insertar.php" method="POST">
  Usuario: <input type="text" name="usuario">
  Password: <input type="text" name="password">
  <input type="submit" value="Agregar">
</form>

<br>

<table border="1">
<tr>
  <th>ID</th>
  <th>Usuario</th>
  <th>Acciones</th>
</tr>

<?php while ($row = $resultado->fetch_assoc()) { ?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['usuario']; ?></td>
  <td>
    <a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
  </td>
</tr>
<?php } ?>
</table>

