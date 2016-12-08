<?php

/**
 *
 */
class transaccionesController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Opcion 1
        $this->set("Datos", $this->transacciones->find("transactions", "all"));
        $this->set("Categoria", $this->transacciones->find("categories", "all"));
        $this->set("Cuenta", $this->transacciones->find("accounts", "all"));
        
        $this->_view->setLayout("Bootstrap");
    }

    public function add()
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($_SESSION["Tipo"] == "1") {
                if ($_POST) {
                    if ($this->transacciones->save("transactions", $_POST)) {
                        $this->redirect(array(
                            "controller" => "Transacciones",
                            "method" => "index"
                        ));
                    } else {
                        $this->redirect(array(
                            "controller" => "Transacciones",
                            "method" => "add"
                        ));
                    }
                }
                $categoria = $this->transacciones->find("categories", "all");
                $cuentas = $this->transacciones->find("accounts", "all");
                $this->set("Categoria", $categoria);
                $this->set("Cuentas", $cuentas);
                $this->_view->setLayout("Bootstrap");
            }
        }
    }

    public function edit($id)
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($id) {
                $option = array(
                    "conditions" => "transactions.id=" . $id
                );
                $Categoria = $this->transacciones->find("categories", "all");
                $Cuenta = $this->transacciones->find("accounts", "all");
                $Transaccion = $this->transacciones->find("transactions", "first", $option);
                $this->set("Categoria", $Categoria);
                $this->set("Cuenta", $Cuenta);
                $this->set("Datos", $Transaccion);
                $this->_view->setLayout("Bootstrap");
            }
            
            if ($_POST) {
                if ($this->transacciones->Update("transactions", $_POST)) {
                    $this->redirect(array(
                        "controller" => "Transacciones",
                        "method" => "index"
                    ));
                } else {
                    $this->redirect(array(
                        "controller" => "Transacciones",
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
            if ($this->transacciones->delete("transactions", $conditions)) {
                $this->redirect(array(
                    "controller" => "Transacciones",
                    "method" => "index"
                ));
            } else {
                $this->redirect(array(
                    "controller" => "Transacciones",
                    "method" => "add"
                ));
            }
        }
    }
}

?>
