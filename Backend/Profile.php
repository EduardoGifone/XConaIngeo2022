<?php
include_once 'Conexion.php';
class Profile{
    var $objetos;
    public function __construct()
    {
        $db =new Conexion(); 
        $this->acceso = $db->pdo;
    }
    function MostrarDatos($nombres,$telefono){
        $sql="SELECT * FROM conaingeo inner alumno";
        $query = $this->acceso->prepare($sql);
        $query = $this->acceso->prepare($sql);
        
    }
    

}
?>