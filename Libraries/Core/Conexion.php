<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Conexion
 *
 * @author Juan Gomez
 */
class Conexion {
    
    private $conect;
   
    public function __construct() {
        $connectionString = "mysql:hos=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
                            
        try{
            $this->conect = new PDO($connectionString,DB_USER, DB_PASSWORD);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
            
            
        } catch (Exception $ex) {
            $this->conect = "Error de conexion";
            echo "ERROR: ".$ex->getMessage();           
        }
        
    }
    
    public function connect(){
        return $this->conect;
    }
}
