<?php

include("conexion.php");

$sql = "SELECT * FROM pedido";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Pedidos</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<h1 style="color:white;">
📦 Editar Pedidos
</h1>

<a href="formularios.php" class="btnPanel">
⬅ Volver Panel
</a>

</header>

<main>

<div class="grid">

<?php

while($pedido = mysqli_fetch_assoc($query)){

?>

<div class="card">

<h3>
Pedido: <?php echo $pedido['id_pedido']; ?>
</h3>

<p>
Cliente: <?php echo $pedido['id_cliente']; ?>
</p>

<p>
Fecha: <?php echo $pedido['fecha']; ?>
</p>

<a
href="editar_pedidos_form.php?id=<?php echo $pedido['id_pedido']; ?>"
class="btnPanel">

Editar

</a>

</div>

<?php

}

?>

</div>

</main>

</body>
</html>