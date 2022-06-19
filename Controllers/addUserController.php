<?php

class addUserController extends Controller
{
    function addUser()
    {
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
                echo "Added user successfully";
            }
        }
    }
}
