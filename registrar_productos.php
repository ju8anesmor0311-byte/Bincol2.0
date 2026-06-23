<?php

include("conexion.php");

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion_producto = $_POST['descripcion_producto'];
$id_marca = $_POST['id_marca'];
$genero = $_POST['genero'];
$imagen_producto = $_POST['imagen_producto'];

$sql = "INSERT INTO producto
(id_producto, nombre_producto, descripcion_producto, id_marca, genero, imagen_producto)

VALUES

('$id_producto',
'$nombre_producto',
'$descripcion_producto',
'$id_marca',
'$genero',
'$imagen_producto')";

$query = mysqli_query($conexion, $sql);

if($query){

    echo "
    <script>
    alert('Producto registrado');
    window.location='pagina.php';
    </script>
    ";

}else{

    echo 'Error en el registro';

}

?>