<?php

session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
}

include("conexion.php");

$id = $_POST['id_marca'];
$nombre = $_POST['nombre_marca'];

$sql = "UPDATE marca SET

nombre_marca='$nombre'

WHERE id_marca='$id'";

$query = mysqli_query($conexion,$sql);

if($query){

    echo "
    <script>

    alert('Marca actualizada');

    window.location='editar_marcas.php';

    </script>
    ";

}else{

    echo 'Error al actualizar';

}

?>