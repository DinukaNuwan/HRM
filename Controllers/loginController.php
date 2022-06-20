<?php

class loginController extends Controller
{
    function login()
    {
        require(ROOT . "Models/Login.php");
        require(ROOT . "Classes/User.php");

        $model = new loginModel();

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $msg = $model->authenticateUser($username, $password);
            if ($msg == "Incorrect Username" || $msg == "Incorrect Password") {
                $this->set(array("error" => $msg));
            } else {
                $user = $msg;
                session_start();
                $_SESSION['user'] = serialize($user);
                header('Location: dashboard');
            }
        }
        $this->render("Login");
    }
}
