<?php

require_once 'modelo/producto.php';

class ProductoControlador{
    
    private $producto;
    
    public function __CONSTRUCT(){
        $this->producto = new Producto();
    }
    
    public function Index(){
        require_once 'vista/header.php';
        require_once 'vista/producto/producto.php';
        require_once 'vista/footer.php';
    }
    
    public function Crud(){
        $prod = new Producto();
        if(isset($_GET['idProducto'])){
            $prod = $this->producto->Buscar($_GET['idProducto']);
        }
        require_once 'vista/header.php';
        require_once 'vista/producto/producto-editar.php';
        require_once 'vista/footer.php';
    }
    
    public function Guardar(){
        $prod = new Producto();
        echo $_REQUEST['idProducto'];
        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->nombre = $_REQUEST['nombre'];
        $prod->precio = $_REQUEST['precio'];
        $prod->stock = $_REQUEST['stock'];
        $prod->idProducto > 0 
            ? $this->producto->Actualizar($prod)
            : $this->producto->Registrar($prod);
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->producto->Eliminar($_GET['idProducto']);
        header('Location: index.php');
    }
}
?>