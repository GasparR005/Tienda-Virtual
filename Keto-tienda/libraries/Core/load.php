<?php 
        $controllerFlile = "controllers/".$controller.".php";
        
        if (file_exists($controllerFlile)) 
        {
            require_once($controllerFlile);
            $controller = new $controller();
            if (method_exists($controller, $method)) 
            {
             $controller->{$method}($params);
            }else {
                require_once("controllers/Error.php");
            }
        }else{
            require_once("controllers/Error.php");
        }
?>