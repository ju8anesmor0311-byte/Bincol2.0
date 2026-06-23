<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Favoritos</title>

<link rel="stylesheet" href="hola.css">

</head>

<body>

<header>

<h1 style="color:white;">
❤️ Favoritos
</h1>

<a href="pagina.php" class="btnPanel">
Volver
</a>

</header>

<main>

<div class="grid" id="contenedorFavoritos">
</div>

</main>

<script>

let favoritos =
JSON.parse(localStorage.getItem("favoritos")) || [];

let contenedor =
document.getElementById("contenedorFavoritos");

favoritos.forEach(producto=>{

  contenedor.innerHTML += `

  <div class="card">

    <img src="${producto.imagen}">

    <h3>${producto.nombre}</h3>

    <p>${producto.descripcion}</p>

  </div>

  `;

});

</script>

</body>
</html>