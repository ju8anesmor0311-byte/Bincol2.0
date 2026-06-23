<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$sql = "SELECT * FROM producto";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<title>Eliminar Productos</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<div class="logo">
<img src="logo.jpeg">
</div>

<a href="formularios.php" class="btnPanel">
⬅ Volver Panel
</a>

</header>

<main>

<h1 style="
color:white;
text-align:center;
margin-bottom:30px;
">
🗑️ Eliminar Productos
</h1>

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

<a href="eliminar_producto.php?id=<?php echo $producto['id_producto']; ?>">

<button style="
width:100%;
padding:12px;
border:none;
border-radius:10px;
background:red;
color:white;
font-weight:bold;
cursor:pointer;
">

Eliminar Producto

</button>

</a>

</div>

<?php

}

?>

</div>

</main>

</body>
</html>