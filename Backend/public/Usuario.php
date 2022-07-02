<?php
include_once 'Conexion.php';
class Usuario{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function Loguearse($user,$pass){
        $sql="SELECT * FROM Tusuario where Email=:user and Contrasenia=:pass";
        $query = $this->acceso->prepare($sql);

        $query->execute(array(':user'=>$user,':pass'=>$pass));
        $this->objetos=$query->fetchall();
        return $this->objetos;
    }
}

?>