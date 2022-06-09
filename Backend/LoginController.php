<?php
include_once 'Usuario.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = new Usuario();
$usuario->Loguearse($user,$pass);
foreach ($usuario->objetos as $objeto) {
    print_r($objeto)
}


?>