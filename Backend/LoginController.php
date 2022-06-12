<?php
include_once 'Usuario.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();
$usuario->Loguearse($user,$pass);

if(!empty($usuario->objetos)){
    foreach ($usuario->objetos as $objeto) {
        # Variables de inicio de session = Variables globales de session
        $_SESSION['usuario']=$objeto->alumno_id;
        $_SESSION['us_tipo']=$objeto->us_tipo;
        $_SESSION['nombre_us']=$objeto->alumno_nombres;
        #Verificar que tipo de usuario incio sesion
        switch ($_SESSION['us_tipo']) {
            case 1:
                header('Location: ../Frontend/public/profile.html');
                break;
            
            case 2:
                header('Location: ../Frontend/public/Bienvenida.html');
                break;                
                
        }
    }
}
#Caso incgreso mal sus datos
else{
    header('Location: ../Frontend/public/login.html');
}

?>