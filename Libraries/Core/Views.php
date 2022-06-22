<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Views
 *
 * @author Juan Gomez
 */
class Views {
    function getView($controller, $view, $data = ""){
        $controller = get_class($controller);
        if($controller == "Home"){
            $view = "Views/".$view.".php";
            
        }else{
            $view = "Views/".$controller."/".$view.".php";
            
        }
        require_once $view;
    }
}
