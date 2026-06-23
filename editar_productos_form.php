<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM producto WHERE id_producto='$id'";

$query = mysqli_query($conexion, $sql);

$producto = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Producto</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<div class="login-container">

<div class="login-card">

<h2>Editar Producto</h2>

<form action="actualizar_producto.php" method="POST">

<input type="hidden"
name="id_producto"
value="<?php echo $producto['id_producto']; ?>">

<input type="text"
name="nombre_producto"
value="<?php echo $producto['nombre_producto']; ?>">

<input type="text"
name="descripcion_producto"
value="<?php echo $producto['descripcion_producto']; ?>">

<input type="text"
name="genero"
value="<?php echo $producto['genero']; ?>">

<input type="text"
name="imagen_producto"
value="<?php echo $producto['imagen_producto']; ?>">

<button type="submit">
Actualizar Producto
</button>

</form>

</div>

</div>

</body>
</html>