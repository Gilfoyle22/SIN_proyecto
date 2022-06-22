<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Load
 *
 * @author Juan Gomez
 */
$controllerFile = "Controllers/".$controller.".php";
if(file_exists($controllerFile)){
    require_once $controllerFile;
    $controller = new $controller();
            
    if(method_exists($controller, $method)){
        $controller->{$method}($params);
    }else{
       require_once './Controllers/Error.php';
    }
            
            
}else{
    require_once './Controllers/Error.php';
}