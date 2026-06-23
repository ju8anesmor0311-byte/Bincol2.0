<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM producto
WHERE id_producto='$id'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Producto eliminado');

    window.location='eliminar_productos.php';

    </script>
    ";

}else{

    echo "Error";

}

?>