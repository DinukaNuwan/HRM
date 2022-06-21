<?php

class addUserController extends Controller
{
    function addUser() {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));
        
        $this->render("AddUser");

        require(ROOT . "Models/AddUser.php");

        $model = new addUserModel();

        if (isset($_POST['submit'])) {
            $emp_id = $_POST['employee_id'];
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = $_POST['role'];
            $photo = $_POST['photo'];
            $msg = $model->addNewUser($emp_id, $username, $password, $role, $photo);
            echo $msg;
            if ($msg == 1) {
                header('Location: dashboard');
            }
        }
    }
}
