<?php

session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM marca
WHERE id_marca='$id'";

$query = mysqli_query($conexion,$sql);

$marca = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<title>Editar Marca</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<h1 style="color:white;">
✏ Editar Marca
</h1>

<a href="editar_marcas.php" class="btnPanel">
⬅ Volver
</a>

</header>

<main>

<section class="formularios">

<div class="card-form">

<h2>Actualizar Marca</h2>

<form action="actualizar_marca.php" method="POST">

<input
type="number"
name="id_marca"
value="<?php echo $marca['id_marca']; ?>"
readonly>

<input
type="text"
name="nombre_marca"
value="<?php echo $marca['nombre_marca']; ?>"
required>

<button type="submit">
Actualizar Marca
</button>

</form>

</div>

</section>

</main>

</body>
</html>