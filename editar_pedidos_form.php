<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pedido
WHERE id_pedido='$id'";

$query = mysqli_query($conexion,$sql);

$pedido = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Pedido</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<div class="login-container">

<div class="login-card">

<h2>Editar Pedido</h2>

<form action="actualizar_pedido.php" method="POST">

<input
type="text"
name="id_pedido"
value="<?php echo $pedido['id_pedido']; ?>"
readonly>

<input
type="text"
name="id_cliente"
value="<?php echo $pedido['id_cliente']; ?>"
required>

<input
type="date"
name="fecha"
value="<?php echo $pedido['fecha']; ?>"
required>

<button type="submit">

Actualizar Pedido

</button>

</form>

</div>

</div>

</body>
</html>