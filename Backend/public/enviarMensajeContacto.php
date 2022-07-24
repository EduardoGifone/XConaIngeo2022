<?php
    session_start();
    //Enviar mensaje de contacto
    //Recuperar datos de formulario
    $nombre = $_POST["fullname"];
    $apellido = $_POST["surname"];
    $mensaje = $_POST["message"];  
    if ( $nombre == "" || $apellido == ""  || $mensaje == ""){
        $_SESSION["errorVacioContacto"] = true;
    }
    else{
        //Crear correo de destino del mensaje
        $correoDestino = "192999@unsaac.edu.pe";
        //Construir mensaje
        $mensajeEnviar = $nombre." ".$apellido." ha enviado el siguiente mensaje: <br>".$mensaje;
        //Enviar mensaje
        //mail($correoDestino, "Contacto página Conaeingeo XI",$mensajeEnviar);
        $_SESSION["mensajeContactoEnviado"] = true;
    }
    header("location: contacto.php #foot"); 
?>