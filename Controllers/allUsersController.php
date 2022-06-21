<?php

class allUsersController extends Controller {
    function allUsers() {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));
        
        $this->render("AllUsers");

        // require(ROOT . "Models/AllUsers.php");

        // $model = new allUsersModel();

        // $model->getUsers(2);(returns the user details of 4 users for the page 2 )
    }
}

?>