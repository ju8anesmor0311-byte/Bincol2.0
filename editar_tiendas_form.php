<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM tienda
WHERE id_tienda='$id'";

$query = mysqli_query($conexion,$sql);

$tienda = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Tienda</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<div class="login-container">

<div class="login-card">

<h2>Editar Tienda</h2>

<form action="actualizar_tienda.php" method="POST">

<input
type="text"
name="id_tienda"
value="<?php echo $tienda['id_tienda']; ?>"
readonly>

<input
type="text"
name="nombre_tienda"
value="<?php echo $tienda['nombre_tienda']; ?>"
required>

<input
type="text"
name="direccion"
value="<?php echo $tienda['direccion']; ?>"
required>

<input
type="text"
name="latitud"
value="<?php echo $tienda['latitud']; ?>"
required>

<input
type="text"
name="longitud"
value="<?php echo $tienda['longitud']; ?>"
required>

<button type="submit">
Actualizar Tienda
</button>

</form>

</div>

</div>

</body>
</html>