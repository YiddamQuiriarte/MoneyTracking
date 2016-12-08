<?php

abstract class Controller
{

    protected $_view;

    abstract public function index();

    public function __construct()
    {
        $this->_view = new View(new Request());
        $controlador = new Request();
        $className = $controlador->getControlador();
        $this->$className = new ClassPDO();
    }

    public function redirect($url = array())
    {
        $path = "";
        
        if (! empty($url["controller"])) {
            $path .= $url["controller"];
        }
        if (! empty($url["method"])) {
            $path .= "/" . $url["method"];
        }
        header("location:" . APP_URL . "/" . $path);
    }

    public function set($one, $two = null)
    {
        if (is_array($one)) {
            if (is_array($two)) {
                $data = array_combine($one, $two);
            } else {
                $data = $one;
            }
        } else {
            $data = array(
                $one => $two
            );
        }
        $this->_view->setVars($data);
    }
}

?>
