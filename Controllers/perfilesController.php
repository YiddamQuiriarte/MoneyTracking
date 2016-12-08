<?php

/**
 *
 */
class perfilesController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Opcion 1
        $this->set("types", $this->perfiles->find("types", "all"));
        
        $this->_view->setLayout("Bootstrap");
        
        // opcion 2
        //
    }

    public function add()
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($_SESSION["Tipo"] == "1") {
                if ($_POST) {
                    if ($this->perfiles->save("types", $_POST)) {
                        $this->redirect(array(
                            "controller" => "perfiles",
                            "method" => "index"
                        ));
                    } else {
                        $this->redirect(array(
                            "controller" => "perfiles",
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
                    "conditions" => "types.id=" . $id
                );
                $perfil = $this->perfiles->find("types", "first", $option);
                $this->set("Perfil", $perfil);
                $this->_view->setLayout("Bootstrap");
            }
            
            if ($_POST) {
                if ($this->perfiles->Update("types", $_POST)) {
                    $this->redirect(array(
                        "controller" => "perfiles",
                        "method" => "index"
                    ));
                } else {
                    $this->redirect(array(
                        "controller" => "perfiles",
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
            if ($this->perfiles->delete("types", $conditions)) {
                $this->redirect(array(
                    "controller" => "perfiles",
                    "method" => "index"
                ));
            } else {
                $this->redirect(array(
                    "controller" => "perfiles",
                    "method" => "add"
                ));
            }
        }
    }
}

?>
