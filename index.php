<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        require_once './Helpers/Helpers.php';
        require_once './Config/Config.php';
        $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
        $arrUrl = explode("/", $url);
        $controller = $arrUrl[0];
        $method = $arrUrl[0];
        $params = "";
        if(!empty($arrUrl[1])){
            if($arrUrl[1] != ""){
                $method = $arrUrl[1];
            }
        }
        if(!empty($arrUrl[2])){
            if($arrUrl[2] != ""){
                for($i = 2; $i< count($arrUrl); $i++){
                    $params .= $arrUrl[$i].",";
                }
                $params = trim($params,",");
                
            }
        }
       


        require_once './Libraries/Core/Autoload.php';
        
        // load
        
        require_once './Libraries/Core/Load.php';
        
        
        ?>
    </body>
</html>
