<?php

/**
 *
 */
class CategoriaController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Opcion 1
        $this->set("Datos", $this->categoria->find("categories", "all"));
        $this->_view->setLayout("Bootstrap");
    }

    public function add()
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($_SESSION["Tipo"] == "1") {
                if ($_POST) {
                    if ($this->categoria->save("categories", $_POST)) {
                        $this->redirect(array(
                            "controller" => "Categoria",
                            "method" => "index"
                        ));
                    } else {
                        $this->redirect(array(
                            "controller" => "Categoria",
                            "method" => "add"
                        ));
                    }
                }
                $this->_view->setLayout("Bootstrap");
            }
        }
    }

    public function edit($id)
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($id) {
                $option = array(
                    "conditions" => "categories.id=" . $id
                );
                $Categoria = $this->categoria->find("categories", "first", $option);
                $this->set("Datos", $Categoria);
                $this->_view->setLayout("Bootstrap");
            }
            
            if ($_POST) {
                if ($this->categoria->Update("categories", $_POST)) {
                    $this->redirect(array(
                        "controller" => "Categoria",
                        "method" => "index"
                    ));
                } else {
                    $this->redirect(array(
                        "controller" => "Categoria",
                        "method" => "edit/" . $_POST["id"]
                    ));
                }
            }
        }
    }

    public function delete($id)
    {
        if ($_SESSION["Tipo"] == "1") {
            $conditions = "id =" . $id;
            if ($this->categoria->delete("categories", $conditions)) {
                $this->redirect(array(
                    "controller" => "Categoria",
                    "method" => "index"
                ));
            } else {
                $this->redirect(array(
                    "controller" => "Categoria",
                    "method" => "add"
                ));
            }
        }
    }
}

?>
