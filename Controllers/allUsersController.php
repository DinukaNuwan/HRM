<?php

class allUsersController extends Controller {
    function allUsers($params) {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));


        require(ROOT . "Models/AllUsers.php");
        $model = new allUsersModel();

        if(isset($params[0][0]) && $params[0][0] != '')
            $page_no = $params[0][0];   // Change to get page_no
        else
            $page_no = '1';

        $users = $model->getUsers($page_no);   // Returns the user details of 4 users for the page 2 
        $count = $model->getUserCount();
        $no_of_pages = ceil($count/4);
        $this->set(array('users' => $users));
        $this->set(array('count' => $count));
        $this->set(array('no_of_pages' => $no_of_pages));
        // var_dump($users);
        // echo '<br/>' . $no_of_pages;
        
        $this->render("AllUsers");

    }
}

?>