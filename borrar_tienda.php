<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM tienda
WHERE id_tienda='$id'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Tienda eliminada');

    window.location='eliminar_tiendas.php';

    </script>
    ";

}else{

    echo 'Error';

}

?>