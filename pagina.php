<?php

include("conexion.php");

$sql = "SELECT * FROM tienda";

$query = mysqli_query($conexion, $sql);

$tiendas = [];

while($fila = mysqli_fetch_assoc($query)){

    $tiendas[] = $fila;

}
$sql_productos = "SELECT * FROM producto";

$query_productos = mysqli_query($conexion, $sql_productos);
$sql_marcas = "SELECT * FROM marca";
$query_marcas = mysqli_query($conexion, $sql_marcas);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BINCOL</title>
<link rel="stylesheet" href="hola.css?v=5">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

<header>

  <!-- LOGO -->
  <div class="logo">
    <img src="logo.jpeg">
  </div>

  <!-- FILTROS -->
  <div class="filtros">

    <!-- GENERO -->
    <div class="filtro-genero">

      <button class="btnGenero" data-genero="todos">
        Todos
      </button>

      <button class="btnGenero" data-genero="hombre">
        Hombre
      </button>

      <button class="btnGenero" data-genero="mujer">
        Mujer
      </button>

    </div>

    <!-- MARCAS -->
    <div class="menu-marcas">

      <button class="btnMarcaPrincipal">
        🏷 Marcas
      </button>

      <div class="dropdown-marcas">

        <div class="btnMarca" data-marca="todos">
          Todas
        </div>

        <?php
        mysqli_data_seek($query_marcas,0);

        while($marca = mysqli_fetch_assoc($query_marcas)){
        ?>

        <div
        class="btnMarca"
        data-marca="<?php echo $marca['id_marca']; ?>">

          <?php echo $marca['nombre_marca']; ?>

        </div>

        <?php
        }
        ?>

      </div>

    </div>

  </div>

  <!-- BUSCADOR -->
  <div class="search-bar">

    <input
    type="text"
    id="buscador"
    placeholder="Buscar prenda...">

    <button id="btnBuscar">
      Buscar
    </button>

    <button id="btnReset">
      Inicio
    </button>

  </div>

  <!-- BOTONES -->
  <div class="header-botones">

    <a href="carrito.php" class="btnPanel">
      🛒 Carrito
    </a>

    <a href="login.php" class="btnPanel">
      Panel Admin
    </a>

  </div>

</header>

<main>

<p id="contador"></p>

<div class="grid" id="gridProductos">
<?php

while($producto = mysqli_fetch_assoc($query_productos)){

?>

<div class="card"

data-id="<?php echo $producto['id_producto']; ?>"

data-nombre="<?php echo $producto['nombre_producto']; ?>"

data-genero="<?php echo $producto['genero']; ?>"
data-marca="<?php echo $producto['id_marca']; ?>"
data-imagen="<?php echo $producto['imagen_producto']; ?>"

data-descripcion="<?php echo $producto['descripcion_producto']; ?>">
<img src="<?php echo $producto['imagen_producto']; ?>">

<h3>
<?php echo $producto['nombre_producto']; ?>
</h3>

<p>
<?php echo $producto['descripcion_producto']; ?>
</p>

<div class="precio">
<span>$99.900</span>
</div>

<div class="acciones">

<button class="btnMapa">
Mapa
</button>

<button class="btnCarrito">
🛒
</button>

<button class="btnFav">
❤️
</button>


</div>

</div>
<?php

}

?>
</div>

</main>

<div class="modal" id="modalMapa">
<div class="modal-content">
<span onclick="cerrarMapa()">✖</span>
<div id="map"></div>
</div>
</div>

<script>
const ubicaciones = <?php echo json_encode($tiendas); ?>;
</script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script src="jaja.js?v=2" defer></script>
</body>
</html>
