<?php

class Bootstrap
{

    public static function run(Request $peticion)
    {
        $controllerName = $peticion->getcontrolador() . 'Controller';
        $rutaControlador = ROOT . 'controllers' . DS . $controllerName . '.php';
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();
        
        if (is_readable($rutaControlador)) {
            require_once $rutaControlador;
            $controller = new $controllerName();
            
            if (is_callable(array(
                $controller,
                $metodo
            ))) {
                $metodo = $peticion->getMetodo();
            } else {
                $metodo = 'index';
            }
            if ($metodo == 'login') {} else {
                Authorization::logged();
            }
            if (isset($args)) {
                call_user_func_array(array(
                    $controller,
                    $metodo
                ), $args);
            } else {
                call_user_func(array(
                    $controller,
                    $metodo
                ));
            }
        } else {
            throw new Exception("No encontrado");
        }
        
        // echo $rutaControlador;
        // exit;
    }
}

?>
