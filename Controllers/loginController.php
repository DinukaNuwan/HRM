<?php

class loginController extends Controller {
    function login() {
        $this->render("Login");

        require(ROOT . "Models/Login.php");

        $model = new loginModel();

        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $msg = $model->authenticateUser($username, $password);
            if ($msg == 1) {
                echo "User successfully authenticated";
                $this->set(array('success' => "Login Successful"));
            } else{
                echo $msg;
                $this->set(array('error' => $msg));
            }
        }
    }
}

?>