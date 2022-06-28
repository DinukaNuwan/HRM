<?php

class editUserController extends Controller {
    function editUser($params) {
        
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        // Authorization based on user role
        if ($user->getRole() == '4') {
            header('Location: unauthorized');
        } else {
            $this->render("EditUser");
        }

    }
}

?>