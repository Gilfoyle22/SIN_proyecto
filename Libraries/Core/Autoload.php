<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Autoload
 *
 * @author Juan Gomez
 */
spl_autoload_register(function($class){
    if(file_exists("Libraries/".'Core/'.$class.".php")){
                
        require_once ("Libraries/".'Core/'.$class.".php");
    }
});