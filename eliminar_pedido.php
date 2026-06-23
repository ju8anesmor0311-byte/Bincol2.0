<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM pedido
WHERE id_pedido='$id'";

mysqli_query($conexion,$sql);

header("Location: formularios.php");

?>