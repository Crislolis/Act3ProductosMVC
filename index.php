<?php
require_once 'conexion.php';

// Instanciamos el controlador
require_once "controlador/producto.controlador.php";
$controlador = new ProductoControlador();
// Todo esta lógica hara el papel de un FrontController
if(!isset($_GET['c']))
{
    $controlador->Index();    
}
else
{
    $accion = isset($_GET['a']) ? $_GET['a'] : 'Index';
    // Llama la accion
    call_user_func( array( $controlador, $accion ) );
}
    
?>