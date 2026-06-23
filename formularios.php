<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Panel BINCOL</title>

<link rel="stylesheet" href="hola.css">

</head>

<body>

<header>

<div class="logo">
<img src="logo.jpeg">
</div>

<a href="pagina.php" class="btnPanel">
Volver a la tienda
</a>
<a href="logout.php" class="btnPanel">
Cerrar Sesión
</a>
</header>
<div style="padding:20px; display:flex; gap:15px; flex-wrap:wrap;">

<a href="detalle_pedido.php" class="btnPanel">
📦 Ver Pedidos
</a>

<a href="editar_pedidos.php" class="btnPanel">
✏️ Editar Pedidos
</a>

<a href="editar_tiendas.php" class="btnPanel">
🏪 Editar Tiendas
</a>

<a href="eliminar_tiendas.php" class="btnPanel">
🗑️ Eliminar Tiendas
</a>

<a href="editar_marcas.php" class="btnPanel">
🏷️ Editar Marcas
</a>

<a href="eliminar_marcas.php" class="btnPanel">
❌ Eliminar Marcas
</a>

<a href="editar_productos.php" class="btnPanel">
👕 Editar Productos
</a>

<a href="eliminar_productos.php" class="btnPanel">
🗑️ Eliminar Productos
</a>

<a href="inventario.php" class="btnPanel">
📦 Inventario
</a>

</div>
</maain>
<section class="formularios">

<div class="contenedor-formularios">

    <!-- PRODUCTO -->
    <div class="card-form">

        <h2>Registrar Producto</h2>

        <form action="registrar_productos.php" method="POST">

            <input type="number" name="id_producto" placeholder="ID Producto" required>

            <input type="text" name="nombre_producto" placeholder="Nombre Producto" required>

            <input type="text" name="descripcion_producto" placeholder="Descripción" required>

            <input type="number" name="id_marca" placeholder="ID Marca" required>

            <input type="text" name="genero" placeholder="Genero" required>

            <input type="text" name="imagen_producto" placeholder="Ruta imagen" required>

            <button type="submit">
                Guardar Producto
            </button>

        </form>

    </div>

    <!-- TIENDA -->
    <div class="card-form">

        <h2>Registrar Tienda</h2>

        <form action="registrar_tienda.php" method="POST">

            <input type="text" name="id_tienda" placeholder="ID Tienda" required>

            <input type="text" name="nombre_tienda" placeholder="Nombre Tienda" required>

            <input type="text" name="direccion" placeholder="Dirección" required>

            <input type="text" name="latitud" placeholder="Latitud" required>

            <input type="text" name="longitud" placeholder="Longitud" required>

            <button type="submit">
                Guardar Tienda
            </button>

        </form>

    </div>

    <!-- PEDIDO -->
    <div class="card-form">

        <h2>Registrar Pedido</h2>

        <form action="registrar_pedido.php" method="POST">

            <input type="text" name="id_pedido" placeholder="ID Pedido" required>

            <input type="text" name="id_cliente" placeholder="ID Cliente" required>

            <input type="date" name="fecha" required>

            <button type="submit">
                Guardar Pedido
            </button>

        </form>

    </div>

    <!-- INVENTARIO -->
    <div class="card-form">

        <h2>Registrar Inventario</h2>

        <form action="registrar_inventario.php" method="POST">

            <input type="text" name="id_inventario" placeholder="ID Inventario" required>

            <input type="text" name="id_tienda" placeholder="ID Tienda" required>

            <input type="text" name="id_producto" placeholder="ID Producto" required>

            <input type="number" name="stock" placeholder="Stock" required>

            <button type="submit">
                Guardar Inventario
            </button>

        </form>

    </div>

</div>
<!-- MARCAS -->
<div class="card-form">

<h2>Registrar Marca</h2>

<form action="registrar_marca.php" method="POST">

<input type="number"
name="id_marca"
placeholder="ID Marca"
required>

<input type="text"
name="nombre_marca"
placeholder="Nombre Marca"
required>

<button type="submit">
Guardar Marca
</button>

</form>

</div>
</section>

</main>

</body>
</html>