<?php

class allUsersController extends Controller {
    function allUsers() {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));


        require(ROOT . "Models/AllUsers.php");
        $model = new allUsersModel();

        $users = $model->getUsers(1);//(returns the user details of 4 users for the page 2 )
        $this->set(array('users' => $users));
        $this->set(array('page_no' => $users));
        
        $this->render("AllUsers");

    }
}

?>