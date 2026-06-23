<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$sql = "SELECT inventario.*, producto.*
FROM inventario
INNER JOIN producto
ON inventario.id_producto = producto.id_producto";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<title>Inventario BINCOL</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<div class="logo">
<img src="logo.jpeg">
</div>

<div style="display:flex; gap:10px;">

<a href="formularios.php" class="btnPanel">
⬅ Panel
</a>

<a href="pagina.php" class="btnPanel">
🏠 Tienda
</a>

</div>

</header>

<main>

<h1 style="
color:white;
text-align:center;
margin-bottom:30px;
">
📦 Inventario General
</h1>

<div class="grid">

<?php

while($fila = mysqli_fetch_assoc($query)){

?>

<div class="card">

<img src="<?php echo $fila['imagen_producto']; ?>">

<h2>
<?php echo $fila['nombre_producto']; ?>
</h2>

<p>
<?php echo $fila['descripcion_producto']; ?>
</p>

<br>

<p>
<b>ID Producto:</b>
<?php echo $fila['id_producto']; ?>
</p>

<p>
<b>Genero:</b>
<?php echo $fila['genero']; ?>
</p>

<p>
<b>ID Tienda:</b>
<?php echo $fila['id_tienda']; ?>
</p>

<p>
<b>Stock:</b>
<?php echo $fila['stock']; ?>
</p>

</div>

<?php

}

?>

</div>

</main>

</body>
</html>