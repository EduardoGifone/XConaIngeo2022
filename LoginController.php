<?php
include_once 'Usuario.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
$usuario = new Usuario();
$usuario->Loguearse($user,$pass);
$_SESSION['correo'] = $user;

if(!empty($usuario->objetos)){  
    $_SESSION["contrasenia"] = $pass;
    foreach ($usuario->objetos as $objeto) {
        $_SESSION['id'] = $objeto -> idusuario;
        $_SESSION['email'] = $objeto -> email;
        $_SESSION['nombre'] = $objeto->nombres;
        $_SESSION['apellido'] = $objeto->apellidos;    
        $_SESSION['dni'] = $objeto->dni;
        $_SESSION['universidad'] = $objeto->universidad;       
        $_SESSION['telefono'] = $objeto->telefono;
    }             
    header('Location:profile.php');           
}
#Caso ingreso mal sus datos
else{
    //Conectar con la base de datos
    $conexion = mysqli_connect("localhost", "root","","conaingeo");
    mysqli_set_charset($conexion, "utf8");
    //Verificar si la cuenta ingresada existe
    //Crear consulta
    $buscarCorreo = "SELECT Contrasenia FROM Tusuario Where Email ='$user'";
    $filas = mysqli_num_rows(mysqli_query($conexion, $buscarCorreo));
    if (!$filas){
        $_SESSION['errorEmail'] = true;
        $_SESSION["correo"] = "";
    }
    else{
        $_SESSION["errorPassword"] = true;       
    }
    header('Location:login.php#foot');
}

?>