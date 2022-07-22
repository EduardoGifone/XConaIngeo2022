<?php 
//Conectar con la base de datos
$conexion = mysqli_connect("localhost", "root","","conaingeo");
mysqli_set_charset($conexion, "utf8");
//Iniciar sesión
session_start();
//Obtener datos del formulario
$correoInput = $_POST["correoInput"];
//Consultar si el correo ingresado existe
$consulta = "SELECT Contrasenia FROM Tusuario where Email = '$correoInput'";
$query = mysqli_query($conexion, $consulta);

if (!mysqli_num_rows($query)){
    //El correo no existe
    $_SESSION["errorCorreoInput"] = true;
}
else{
    //Recuperar contraseña
    $password = current($query -> fetch_assoc());
    //Crear el mensaje
    //Enviar al correo
    //Enviar correo
    $_SESSION["claveEnviada"] = true ;
}
header("location: recuperarCon.php #foot")
?>