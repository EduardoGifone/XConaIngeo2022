<?php
    session_start();
    if (!isset($_SESSION['correo'])){
        header("location:login.php");
    }
    else{
        $correo = $_SESSION['correo'];
        $nombre = $_SESSION['nombre'];
        echo "Correo:".$correo.'    '; 
        echo 'Nombre de usuario: '.$nombre;

    }
?>