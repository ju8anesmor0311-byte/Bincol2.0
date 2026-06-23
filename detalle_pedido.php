<?php

include("conexion.php");

$sql = "SELECT * FROM pedido";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Detalle Pedidos</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<h1 style="color:white;">
📦 Pedidos Registrados
</h1>

<a href="formularios.php" class="btnPanel">
⬅ Volver Panel
</a>

</header>

<main>

<div class="tabla-contenedor">

<table class="tabla">

<tr>
<th>ID Pedido</th>
<th>ID Cliente</th>
<th>Fecha</th>
</tr>

<?php

while($fila = mysqli_fetch_assoc($query)){

?>

<tr>

<td>
<?php echo $fila['id_pedido']; ?>
</td>

<td>
<?php echo $fila['id_cliente']; ?>
</td>

<td>
<?php echo $fila['fecha']; ?>
</td>

</tr>

<?php

}

?>

</table>

</div>

</main>

</body>
</html>