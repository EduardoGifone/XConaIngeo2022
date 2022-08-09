<?php 
//Conectar con la base de datos
$conexion = mysqli_connect("localhost", "root","","conaingeo");
mysqli_set_charset($conexion, "utf8");
//Iniciar sesión
session_start();
//Obtener datos del formulario
$correoInput = $_POST["correoInput"];
//Consultar si el correo ingresado existe

$consulta = "SELECT Nombres, Apellidos, Contrasenia FROM Tusuario where Email = '$correoInput'";

$query = mysqli_query($conexion, $consulta);

if (!mysqli_num_rows($query)){
    //El correo no existe
    $_SESSION["errorCorreoInput"] = true;
}
else{

    //Recuperar datos
    while($row = mysqli_fetch_array($query)){
        $nombre = $row["Nombres"];
        $apellido = $row["Apellidos"];
        $pass = $row["Contrasenia"];
    }
     //Crear el mensaje
    $mensajeEnviar = "Hola ".$nombre." ".$apellido.", solicitaste recuperar tu contraseña para ingresar a nuestra plataforma de Conaeingeo XI, tu contraseña es: '".$pass."'"; 
    //Enviar al correo
    //mail($correoInput, "Recuperación de contraseña para Conaeingeo", $mensajeEnviar);

    //Enviar correo
    $_SESSION["claveEnviada"] = true ;
}
header("location: recuperarCon.php #foot")
?>