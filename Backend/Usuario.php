<?php
include_once 'Conexion.php';
class Usuario{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function Loguearse($user,$pass){
        $sql="SELECT * FROM alumno inner join tipo_us on  us_tipo=id_tipo_us where alumno_email=:user and alumno_DNI=:pass ";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        return $this->objetos;
    }
}

?>