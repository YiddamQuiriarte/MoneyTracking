<?php

/**
 *
 */
class View
{

    private $_controlador;

    private $_metodo;

    private $_view;

    private $_layout = DEFAULT_LAYOUT;

    private $viewsVars;

    public function __construct(Request $P)
    {
        $this->_controlador = $P->getcontrolador();
        $this->_metodo = $P->getMetodo();
        $this->_view = $this->_metodo;
        $this->HTML = new Html();
    }

    public function setLayout($layout)
    {
        $this->_layout = $layout;
    }

    public function setView($view)
    {
        $this->_view = $view;
    }

    public function setVars($vars)
    {
        if (empty($this->viewsVars)) {
            $this->viewsVars = $vars;
        } else {
            $this->viewsVars = array_merge($this->viewsVars, $vars);
        }
    }

    public function render($view)
    {
        if (! empty($this->viewsVars)) {
            extract($this->viewsVars, EXTR_OVERWRITE);
        }
        
        $_layoutParams = array(
            "route" => APP_URL . "/Views/Layout/" . $this->_layout,
            "route_css" => APP_URL . "/Views/Layout/" . $this->_layout . "/css",
            "route_img" => APP_URL . "/Views/Layout/" . $this->_layout . "/img",
            "route_js" => APP_URL . "/Views/Layout/" . $this->_layout . "/js"
        );
        
        $routeView = ROOT . "Views" . DS . $this->_controlador . DS . $view . ".php";
        $header = ROOT . "Views" . DS . "Layout" . DS . $this->_layout . DS . "header.php";
        $footer = ROOT . "Views" . DS . "Layout" . DS . $this->_layout . DS . "footer.php";
        // echo $routeView;
        
        if (file_exists($routeView)) {
            include_once ($header);
            include_once ($routeView);
            include_once ($footer);
        } else {
            throw new Exception("Error al procesar la vista");
        }
    }

    public function __destruct()
    {
        $this->render($this->_view);
    }
}

?>
