<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM marca
WHERE id_marca='$id'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Marca eliminada');

    window.location='eliminar_marcas.php';

    </script>
    ";

}else{

    echo 'Error';

}

?>