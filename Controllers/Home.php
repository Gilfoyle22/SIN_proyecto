<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Home
 *
 * @author Juan Gomez
 */
class Home  extends Controllers{
    public function __construct() {
        parent::__construct();
    }
    public function home(){
        $data['page_id'] = 1;
        $data['tag_page'] = "Home";
        $data['page_title'] = "Pagina princial";
        $data['page_name'] = "home";
        $data['page_content'] = "lorem";
        $this->views->getView($this,"home",$data);
    }
    

    
    public function insertar(){
        $data = $this->model->setUser("Fernando", 24);
        $data = $this->model->setUser("Alex", 32);
        print_r($data);
    }
    public function verusuario($id) {
        
        $data = $this->model->getUser($id);
        print_r($data);
        
    }
    public function actualizar(){
        $data = $this->model->updateUser(1,"Roberto",20);
        print_r($data);
    }
    public function verusuarios() {
        
        $data = $this->model->getUsers();
        print_r($data);
        
    }
    public function eliminarUsuario($id) {
        $data = $this->model->delUser($id);
        print_r($data);
    }
}
