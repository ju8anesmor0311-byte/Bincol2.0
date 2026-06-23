<?php

include("conexion.php");

$id_tienda = $_POST['id_tienda'];
$nombre_tienda = $_POST['nombre_tienda'];
$direccion = $_POST['direccion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

$sql = "UPDATE tienda SET

nombre_tienda='$nombre_tienda',
direccion='$direccion',
latitud='$latitud',
longitud='$longitud'

WHERE id_tienda='$id_tienda'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Tienda actualizada');

    window.location='editar_tiendas.php';

    </script>
    ";

}else{

    echo 'Error al actualizar';

}

?>