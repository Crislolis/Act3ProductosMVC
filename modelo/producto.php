<?php
class Producto
{
    private $pdo;
    
    public $idProducto;
    public $nombre;
    public $precio;
    public $stock;

    public function __CONSTRUCT()
    {
	try{
            $this->pdo = Conexion::StartUp();     
	}
        catch(Exception $e){
            die($e->getMessage());
	}
    }

    public function Listar()
    {
	try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM productos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
	}
	catch(Exception $e){
            die($e->getMessage());
	}
    }

    public function Buscar($id)
    {
	try{
            $stm = $this->pdo->prepare("SELECT * FROM productos WHERE idProducto = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
	} 
        catch (Exception $e) {
            die($e->getMessage());
	}
    }

    public function Eliminar($id)
    {
	try{
            $stm = $this->pdo->prepare("DELETE FROM productos WHERE idProducto = ?");			          
            $stm->execute(array($id));
	} 
        catch (Exception $e){
            die($e->getMessage());
	}
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE productos SET nombre = ?, precio = ?, stock = ? WHERE idProducto = ?";
            $this->pdo->prepare($sql)->execute(array($data->nombre, $data->precio, $data->stock, $data->idProducto));
	} 
        catch (Exception $e) {
            die($e->getMessage());
	}
    }

    public function Registrar($data)
    {
	try {
            $sql = "INSERT INTO productos (idProducto,nombre,precio,stock) VALUES (?, ?, ?, ?)";
            $this->pdo->prepare($sql)->execute(array($data->idProducto,$data->nombre,$data->precio,$data->stock));
	} 
        catch (Exception $e) {
            die($e->getMessage());
	}
    }
}
?>