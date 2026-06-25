<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<title>Carrito</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
<button onclick="vaciarCarrito()" class="btnPanel">
    🗑️ Vaciar carrito
</button>
<div class="grid" id="contenedorCarrito">
</div>

</main>

<script>

let carrito =
JSON.parse(localStorage.getItem("carrito")) || [];

let contenedor =
document.getElementById("contenedorCarrito");

if(carrito.length === 0){

    contenedor.innerHTML = "<h2>No hay productos en el carrito</h2>";

}else{

    carrito.forEach(producto=>{

        contenedor.innerHTML += `

        <div class="card">

            <img src="${producto.imagen}">

            <h3>${producto.nombre}</h3>

            <p>${producto.descripcion}</p>

        </div>

        `;

    });

}

function vaciarCarrito(){

    localStorage.removeItem("carrito");

    Swal.fire({
        icon: "success",
        title: "Carrito vaciado"
    }).then(() => {
        location.reload();
    });

}

</script>

</body>
</html>

