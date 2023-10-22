<?php session_start();

if(isset($_SESSION['usuario'])){
    require 'contenido.view.php';
}else{
    require 'login.view.php';
}

?>