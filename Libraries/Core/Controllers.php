<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Controllers
 *
 * @author Juan Gomez
 */
class Controllers {
    public function __construct() {
        $this->views = new Views();
        $this->loadModel();
    }
    public function loadModel() {
        $model = get_class($this)."Model";
        $routClass = "Models/".$model.".php"; 
        if(file_exists($routClass)){
            require_once $routClass;
            $this->model = new $model();
        }
    }

}
