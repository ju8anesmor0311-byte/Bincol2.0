<?php

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

/* USUARIO ADMIN */

if($usuario == "bincol20gtasa@gmail.com" && $clave == "Bincolombia#2001"){

    $_SESSION['admin'] = true;

    header("Location: formularios.php");

}else{

    echo "
    <script>

    alert('Datos incorrectos');

    window.location='login.php';

    </script>
    ";

}

?>