<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of homeModel
 *
 * @author Juan Gomez
 */
class homeModel extends Mysql {
    public function __construct() {
        parent::__construct();
        //echo "mensaje  desde el modelo home";
    }
    

    
    
    public function setUser(string $nombre, int $edad) {
        $query_isert = "INSERT INTO usuario(nombre, edad) VALUES(?,?)";
        $arrData = array($nombre, $edad);
        $resquest_isert = $this->insert($query_isert, $arrData);
        return $resquest_isert;
        
    }
    public function getUser($id) {
        $sql = "SELECT * FROM usuario WHERE id = $id";
        $request = $this->select($sql);
        return $request;
        
        
    }
    public function updateUser(int $id, string $nombre, int $edad) {
        $sql = "UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
        $arrData = array($nombre, $edad);
        $resquest = $this->update($sql, $arrData);
        return $resquest;
    }
    public function getUsers() {
        $sql = "SELECT * FROM usuario ";
        $resquest = $this->select_all($sql);
        return $resquest;
        
    }
    public function delUser($id) {
        $sql = "DELETE FROM usuario WHERE id = $id";
        $resquest = $this->delete($sql);
        return $resquest;
        
    }
}
