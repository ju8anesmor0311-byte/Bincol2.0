<?php

include("conexion.php");

$sql = "SELECT * FROM producto";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Productos</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<h1 style="color:white;">
✏ Editar Productos
</h1>

<a href="formularios.php" class="btnPanel">
⬅ Volver Panel
</a>

</header>

<main>

<div class="grid">

<?php

while($producto = mysqli_fetch_assoc($query)){

?>

<div class="card">

<img src="<?php echo $producto['imagen_producto']; ?>">

<h3>
<?php echo $producto['nombre_producto']; ?>
</h3>

<p>
<?php echo $producto['descripcion_producto']; ?>
</p>

<a href="editar_productos_form.php?id=<?php echo $producto['id_producto']; ?>" class="btnPanel">
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