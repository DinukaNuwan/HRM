<?php

class loginController extends Controller
{
    function login()
    {

        require(ROOT . "Classes/User.php");
        session_start();
        if (isset($_SESSION['user'])) {
            header('Location: dashboard');
        }

        require(ROOT . "Models/Login.php");

        $model = new loginModel();

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $msg = $model->authenticateUser($username, $password);
            if ($msg == "Incorrect Username") {
                $this->set(array("username_err" => $msg));
            } else if ($msg == "Incorrect Password") {
                $this->set(array("password_err" => $msg));
            } else {
                $user = $msg;
                session_start();
                $_SESSION['user'] = serialize($user);
                header('Location: dashboard');
            }
        }

        $this->render('login');
    }
}
