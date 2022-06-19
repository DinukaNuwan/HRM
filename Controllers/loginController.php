<?php

class loginController extends Controller
{
    function login()
    {
        require(ROOT . "Models/Login.php");

        $model = new loginModel();

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $msg = $model->authenticateUser($username, $password);
            if ($msg == 1) {
                header('Location: allUsers');
            } else {
                $this->set(array("error" => $msg));
            }
        }
        $this->render("Login");
    }
}
