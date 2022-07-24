<link rel="stylesheet" href="../styles/styles_alert.css">
<?php
    // session_start();
    if (isset($_SESSION["errorActual"])){
        $boolContActual = $_SESSION["errorActual"];
        if ($boolContActual){
            $_SESSION["errorActual"] = false;
        ?>
            <script>
                swal({buttons: false, 
                    title: "Error!",
                    icon: "error",
                    text: "La contraseña actual es incorrecta",
                    timer: 2000,});
            </script>
        <?php
        }
    }
    if (isset($_SESSION["noCoinciden"])){
        $boolCoinciden = $_SESSION["noCoinciden"];
        if ($boolCoinciden){
            $_SESSION["noCoinciden"] = false;
        ?>
            <script>
                swal({buttons: false, 
                    title: "Error!",
                    icon: "error",
                    text: "La contraseñas nuevas no coinciden",
                    timer: 2000,});
            </script>
        <?php
        }
    }
    if (isset($_SESSION["cambioExito"])){
        $boolSuccess = $_SESSION["cambioExito"];
        if ($boolSuccess){
            $_SESSION["cambioExito"] = false;
        ?>
            <script>
                swal({buttons: false, 
                    title: "Contraseña cambiada!",
                    icon: "success",
                    text: "Tu contraseña ha sido actualizada",
                    timer: 1500,});
            </script>
            <style>
                .swal-title{
                    color:green;
                }
            </style>
        <?php
        }
    }
    if (isset($_SESSION["shortPass"])){
        $boolSuccess = $_SESSION["shortPass"];
        if ($boolSuccess){
            $_SESSION["shortPass"] = false;
        ?>
            <script>
                swal({buttons: false, 
                    title: "Error!",
                    icon: "error",
                    text: "La nueva contraseña es muy corta",
                    timer: 1500,});
            </script>
        <?php
        }
    }

?>