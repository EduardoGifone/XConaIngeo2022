<?php 
    //Iniciar sesión
    session_start();
    //Obtener datos de formulario
    $actualPass = strtolower($_POST["actualPass"]);
    $newPass = strtolower($_POST["newPass"]);
    $confNewPass = strtolower($_POST["confNewPass"]);

    //Obtener correo de inicio de sesion
    $correo = $_SESSION["correo"];

    //Obtener contraseña de la base de datos
    $conexion = mysqli_connect("localhost", "root","","conaingeo");
    mysqli_set_charset($conexion, "utf8");
    $getPass = "SELECT Contrasenia FROM Tusuario where Email ='$correo'";
    $password = current(mysqli_query($conexion, $getPass)-> fetch_assoc());
   
    //echo $actualPass."  ".$newPass."  ".$confNewPass."  ".$password;
    //Validar contraseña actual
    if ($actualPass != strtolower($password)){
        $_SESSION["errorActual"] = true;
    }
    //Validar nueva contraseña
    else if($newPass != $confNewPass){
        $_SESSION["noCoinciden"] = true;
    }
    else if (strlen($newPass) < 6){
        $_SESSION["shortPass"] = true;
    }
    else{
        //Cambiar contraseña
        //Conectar a la base de datos     
        //Crear consulta
        $consulta = "UPDATE Tusuario SET Contrasenia = '$newPass' where Email = '$correo'";
        $query = mysqli_query($conexion, $consulta);
        if ($query){
            $_SESSION["cambioExito"] = true;
        }
    }
    header("location: cambiarCon.php #foot");
?>