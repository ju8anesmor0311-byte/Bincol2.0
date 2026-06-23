<?php

include("conexion.php");

$id_pedido = $_POST['id_pedido'];
$id_cliente = $_POST['id_cliente'];
$fecha = $_POST['fecha'];

$sql = "UPDATE pedido SET

id_cliente='$id_cliente',
fecha='$fecha'

WHERE id_pedido='$id_pedido'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Pedido actualizado');

    window.location='editar_pedidos.php';

    </script>
    ";

}else{

    echo 'Error';

}

?>