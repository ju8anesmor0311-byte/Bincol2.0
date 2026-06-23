<?php

include("conexion.php");

$id_tienda = $_POST['id_tienda'];
$nombre_tienda = $_POST['nombre_tienda'];
$direccion = $_POST['direccion'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];

$sql = "INSERT INTO tienda
(id_tienda, nombre_tienda, direccion, latitud, longitud)

VALUES

('$id_tienda',
'$nombre_tienda',
'$direccion',
'$latitud',
'$longitud')";

$query = mysqli_query($conexion, $sql);

if($query){

    echo "
    <script>
    alert('Tienda registrada');
    window.location='pagina.php';
    </script>
    ";

}else{

    echo "Error";

}

?>