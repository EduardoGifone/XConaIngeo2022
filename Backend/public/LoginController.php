<?php
include_once 'Usuario.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
$_SESSION['correo'] = $user;
$usuario = new Usuario();
$usuario->Loguearse($user,$pass);

if(!empty($usuario->objetos)){  
    
    foreach ($usuario->objetos as $objeto) {
        $_SESSION['id'] = $objeto -> idusuario;
        $_SESSION['nombre'] = $objeto->nombres;
        $_SESSION['apellido'] = $objeto->apellidos;    
        $_SESSION['dni'] = $objeto->dni;
        $_SESSION['universidad'] = $objeto->universidad;
    }             
    header('Location:profile.php');           
}
#Caso ingreso mal sus datos
else{
    header('Location:login.php');
}

?>