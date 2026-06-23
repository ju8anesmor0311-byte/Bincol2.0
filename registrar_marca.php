<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$id_marca = $_POST['id_marca'];

$nombre_marca = $_POST['nombre_marca'];

$sql = "INSERT INTO marca
(id_marca, nombre_marca)

VALUES

('$id_marca',
'$nombre_marca')";

$query = mysqli_query($conexion, $sql);

if($query){

    echo "
    <script>

    alert('Marca registrada');

    window.location='formularios.php';

    </script>
    ";

}else{

    echo "
    <script>

    alert('Error al registrar');

    window.location='formularios.php';

    </script>
    ";

}

?>