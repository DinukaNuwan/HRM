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
            $msg = '';

            if ($this->checkEmptyFields()) {
                $this->set(array("error" => "Some fields are empty"));
            }
            if ($this->checkFieldLength()) {
                $this->set(array("error" => "Some fields are empty"));
            } else {
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
        }

        $this->render('login');
    }

    private function checkEmptyFields() {
        return empty($this->username) or empty($this->password);
    }

    private function checkFieldLength() {
        return (strlen($this->username) > 45 || strlen($this->password) > 255);
    }
}
