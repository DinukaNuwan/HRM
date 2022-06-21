<?php

class loginController extends Controller
{
    function login() {
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

        $this->render('login');
    }
    private function checkEmptyFields(){
        return empty($this->username) or empty($this->password);
    }
    private function checkFieldLength(){
        $field_lengths = array('username' => 45, 'password' => 255);
        return (strlen($this->username) > 45 || strlen($this->password) > 255);
    }
}
