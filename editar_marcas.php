<?php

include("conexion.php");

$sql = "SELECT * FROM marca";

$query = mysqli_query($conexion,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Marcas</title>
<link rel="stylesheet" href="hola.css">
</head>

<body>

<header>

<h1 style="color:white;">
🏷️ Editar Marcas
</h1>

<a href="formularios.php" class="btnPanel">
⬅ Volver
</a>

</header>

<main>

<div class="grid">

<?php while($marca=mysqli_fetch_assoc($query)){ ?>

<div class="card">

<h3>
<?php echo $marca['nombre_marca']; ?>
</h3>

<a
class="btnPanel"
href="editar_marcas_form.php?id=<?php echo $marca['id_marca']; ?>">

Editar

</a>

</div>

<?php } ?>

</div>

</main>

</body>
</html>