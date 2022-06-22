<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Productos
 *
 * @author Juan Gomez
 */
class Productos extends Controllers {
    public function __construct() {
        parent::__construct();
    }
    public function productos(){
        $data['page_id'] = 2;
        $data['tag_page'] = "Productos";
        $data['page_title'] = "Productos en venta";
        $data['page_name'] = "Productos";
        
        
        $this->views->getView($this,"productos",$data); #definimos que vista mostrar
    }
    public function insertarProducto(){
        $data = $this->model->setProducto("asjkdhakjs", 12.5, 458);
        
        print_r($data);
    }
    public function verproducto($id) {
        
        $data = $this->model->getProducto($id);
        print_r($data);
        
    }
    public function actualizarProducto(){
        $data = $this->model->updateProducto(1,"Pomo negro",20.2,12);
        print_r($data);
    }
    public function verproductos() {
        
        $data = $this->model->getProductos();
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('<pre>');
        
        
    }
    public function eliminarProducto($id) {
        $data = $this->model->delProducto($id);
        print_r($data);
    }
}
