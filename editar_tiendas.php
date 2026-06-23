<?php

include("conexion.php");

$sql = "SELECT * FROM tienda";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Editar Tiendas</title>

<link rel="stylesheet" href="hola.css">

</head>
<body>

<header>

<h1 style="color:white;">
🏪 Editar Tiendas
</h1>

<a href="formularios.php" class="btnPanel">
⬅ Volver Panel
</a>

</header>

<main>

<div class="grid">

<?php

while($tienda = mysqli_fetch_assoc($query)){

?>

<div class="card">

<h3>
<?php echo $tienda['nombre_tienda']; ?>
</h3>

<p>
<?php echo $tienda['direccion']; ?>
</p>

<p>
Lat: <?php echo $tienda['latitud']; ?>
</p>

<p>
Lng: <?php echo $tienda['longitud']; ?>
</p>

<a href="editar_tiendas_form.php?id=<?php echo $tienda['id_tienda']; ?>" class="btnPanel">
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