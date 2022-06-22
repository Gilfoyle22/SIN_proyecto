<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Error
 *
 * @author Juan Gomez
 */
class Errors extends Controllers{
    public function __construct() {
        parent::__construct();
    }
    public function notFound(){
        $this->views->getView($this,"error");
    }
    
     
    
}
$notFound = new Errors();
$notFound->notFound();