<?php

include("conexion.php");

$id = $_POST['id_producto'];

$nombre = $_POST['nombre_producto'];

$descripcion = $_POST['descripcion_producto'];

$genero = $_POST['genero'];

$imagen = $_POST['imagen_producto'];

$sql = "UPDATE producto SET

nombre_producto='$nombre',
descripcion_producto='$descripcion',
genero='$genero',
imagen_producto='$imagen'

WHERE id_producto='$id'";

$query = mysqli_query($conexion, $sql);

if($query){

    echo "
    <script>

    alert('Producto actualizado');

    window.location='editar_productos.php';

    </script>
    ";

}else{

    echo 'Error al actualizar';

}

?>