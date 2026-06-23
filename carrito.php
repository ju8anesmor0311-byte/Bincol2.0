<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Carrito</title>

<link rel="stylesheet" href="hola.css">

</head>

<body>

<header>

<h1 style="color:white;">
🛒 Carrito
</h1>

<a href="pagina.php" class="btnPanel">
Volver
</a>

</header>

<main>

<div class="grid" id="contenedorCarrito">
</div>

</main>

<script>

let carrito =
JSON.parse(localStorage.getItem("carrito")) || [];

let contenedor =
document.getElementById("contenedorCarrito");

carrito.forEach(producto=>{

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

