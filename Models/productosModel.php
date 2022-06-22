<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of productosModel
 *
 * @author Juan Gomez
 */
class productosModel extends Mysql{
    
    public function __construct() {
        parent::__construct();
        //echo "mensaje  desde el modelo home";
    }
   public function setProducto(string $nombre,float $precio, int $stock) {
            $query_isert = "INSERT INTO producto(nombre, precio, stock) VALUES(?,?,?)";
        $arrData = array($nombre, $precio, $stock);
        $resquest_isert = $this->insert($query_isert, $arrData);
        return $resquest_isert;
        
    }
    public function getProducto($id) {
        $sql = "SELECT * FROM producto WHERE id = $id";
        $request = $this->select($sql);
        return $request;
        
        
    }
    public function updateProducto(int $id,string $nombre,float $precio, int $stock) {
        $sql = "UPDATE producto SET nombre = ?, precio = ?, stock = ? WHERE id = $id";
        $arrData = array($nombre, $precio, $stock);
        $resquest = $this->update($sql, $arrData);
        return $resquest;
    }
    public function getProductos() {
        $sql = "SELECT * FROM producto ";
        $resquest = $this->select_all($sql);
        return $resquest;
        
    }
    public function delProducto($id) {
        $sql = "DELETE FROM producto WHERE id = $id";
        $resquest = $this->delete($sql);
        return $resquest;
        
    }
}
