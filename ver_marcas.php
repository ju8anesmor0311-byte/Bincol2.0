<?php

include("conexion.php");

$sql = "SELECT * FROM marca";

$query = mysqli_query($conexion,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Marcas</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<h1 style="color:white;">
Registro de Marcas
</h1>

<a href="formularios.php" class="btnPanel">
Volver
</a>

</header>

<main style="padding:40px;">

<table class="tabla-marcas">

<tr>

<th>ID</th>
<th>Marca</th>

</tr>

<?php
while($marca = mysqli_fetch_assoc($query)){
?>

<tr>

<td>
<?php echo $marca['id_marca']; ?>
</td>

<td>
<?php echo $marca['nombre_marca']; ?>
</td>

</tr>

<?php
}
?>

</table>

</main>

</body>
</html>