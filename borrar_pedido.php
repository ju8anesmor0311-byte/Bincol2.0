<?php

session_start();

if(!isset($_SESSION['admin'])){

    header("Location: login.php");

}

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM pedido
WHERE id_pedido='$id'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Pedido eliminado');

    window.location='eliminar_pedidos.php';

    </script>
    ";

}else{

    echo 'Error';

}

?>