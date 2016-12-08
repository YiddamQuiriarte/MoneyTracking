<?php

/**
 *
 */
class usersController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Opcion 1
        $conditions = array(
            "conditions" => "users.type_id = types.id"
        );
        $this->set("users", $this->users->find("users, types", "all", $conditions));
        $this->set("usersCount", $this->users->find("users", "count"));
        $this->_view->setLayout("Bootstrap");
        // Opcion 2
        // $users = $this->users->find("users","all");
        // $userCount = $this->users->find("users","count");
        // $this->set(compact("users","usersCount"));
    }

    public function add()
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($_POST) {
                $pass = new Password();
                $_POST["password"] = $pass->getPassword($_POST["password"]);
                if ($this->users->save("users", $_POST)) {
                    $this->redirect(array(
                        "controller" => "users"
                    ));
                } else {
                    $this->redirect(array(
                        "controller" => "add",
                        "method" => "add"
                    ));
                }
            }
            $this->set("types", $this->users->find("types", "all"));
            $this->_view->setLayout("Bootstrap");
        }
    }

    public function edit($id)
    {
        if ($_SESSION["Tipo"] == "1") {
            if ($id) {
                $option = array(
                    "conditions" => "users.id=" . $id
                );
                $user = $this->users->find("users", "first", $option);
                $this->set("user", $user);
                $this->set("types", $this->users->find("types", "all"));
                $this->_view->setLayout("Bootstrap");
            }

            if ($_POST) {
                if (! empty($_POST["newPassword"])) {
                    $pass = new Password();
                    $_POST["password"] = $pass->getPassword($_POST["newPassword"]);
                }
                if ($this->users->Update("users", $_POST)) {
                    $this->redirect(array(
                        "controller" => "users",
                        "method" => "index"
                    ));
                } else {
                    $this->redirect(array(
                        "controller" => "users",
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
            if ($this->users->delete("users", $conditions)) {
                $this->redirect(array(
                    "controller" => "users"
                ));
            } else {
                $this->redirect(array(
                    "controller" => "users",
                    "method" => "add"
                ));
            }
        }
    }

    public function login()
    {
        $this->_view->setLayout("Bootstrap");
        if ($_POST) {

            $pass = new Password();
            $auth = new Authorization();
            $filter = new Validations();

            $username = $filter->sanitizeText($_POST["username"]);
            $password = $filter->sanitizeText($_POST["password"]);

            $option = array(
                "conditions" => "username = '$username'"
            );
            $user = $this->users->find("users", "first", $option);

            if ($pass->isValid($password, $user["password"])) {
                $auth->login($user);
                $this->redirect(array(
                    "controller" => "index",
                    "method" => "index"
                ));
            } else {
                echo "
      			<script type='text/javascript' class= >
      			alert('Usuario no valido');
      			window.location='http://localhost/Moneytracking/';
      			</script>

        ";
            }
        }
    }

    public function logout()
    {
        $auth = new Authorization();
        $auth->logout();
    }

    public function form()
    {
      
    }


}

?>
