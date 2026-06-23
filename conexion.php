<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "cliente";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if(!$conexion){
    die("Error de conexion");
}

?>