<?php

include("conexion.php");

$id_pedido = $_POST['id_pedido'];
$id_cliente = $_POST['id_cliente'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO pedido
(id_pedido, id_cliente, fecha)

VALUES

('$id_pedido',
'$id_cliente',
'$fecha')";

$query = mysqli_query($conexion, $sql);

if($query){

    echo "
    <script>
    alert('Pedido registrado');
    window.location='pagina.php';
    </script>
    ";

}else{

    echo "Error";

}

?>