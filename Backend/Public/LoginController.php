<?php
include_once 'Usuario.php';

session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();
$usuario->Loguearse($user,$pass);
#Usuario tiene un arreglo de todos los campos. 
if(!empty($usuario->objetos)){
    # Variables de inicio de session = Variables globales de session
    foreach ($usuario->objetos as $objeto) {
        $_SESSION['IdUsario']= $objeto->idusuario;
        $_SESSION['Dni']= $objeto->dni;
        $_SESSION['Nombres'] = $objeto->nombres;
        $_SESSION['Apellidos'] = $objeto->apellidos;
        $_SESSION['Email'] = $objeto->email;
        $_SESSION['Contrasenia'] = $objeto->contrasenia;
        $_SESSION['Universidad']= $objeto->universidad;
        $_SESSION['Telefono']= $objeto->telefono;
    }
    header('Location: Profile.php');
    
}
#Caso incgreso mal sus datos
else{
    echo "555";
    header('Location: login.php');
}

?>