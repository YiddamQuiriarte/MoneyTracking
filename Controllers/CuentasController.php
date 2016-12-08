<?php

/**
 *
 */
class CuentasController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Opcion 1
        $this->set("Cuenta", $this->cuentas->find("accounts", "all"));
        $this->_view->setLayout("Bootstrap");
        
        // opcion 2
    }

    public function add()
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($_SESSION["Tipo"] == "1") {
                if ($_POST) {
                    if ($this->cuentas->save("accounts", $_POST)) {
                        $this->redirect(array(
                            "controller" => "Cuentas",
                            "method" => "index"
                        ));
                    } else {
                        $this->redirect(array(
                            "controller" => "Cuentas",
                            "method" => "add"
                        ));
                    }
                }
                $this->set("Users", $this->cuentas->find("users", "all"));
                $this->_view->setLayout("Bootstrap");
            }
        }
    }

    public function edit($id)
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($id) {
                $option = array(
                    "conditions" => "accounts.id=" . $id
                );
                $Cuenta = $this->cuentas->find("accounts", "first", $option);
                $user = $this->cuentas->find("users", "all");
                $this->set("Datos", $Cuenta);
                $this->set("Usuario", $user);
                $this->_view->setLayout("Bootstrap");
            }
            
            if ($_POST) {
                if ($this->cuentas->Update("accounts", $_POST)) {
                    $this->redirect(array(
                        "controller" => "Cuentas",
                        "method" => "index"
                    ));
                } else {
                    $this->redirect(array(
                        "controller" => "Cuentas",
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
            if ($this->cuentas->delete("accounts", $conditions)) {
                $this->redirect(array(
                    "controller" => "Cuentas",
                    "method" => "index"
                ));
            } else {
                $this->redirect(array(
                    "controller" => "Cuentas",
                    "method" => "add"
                ));
            }
        }
    }
}

?>
