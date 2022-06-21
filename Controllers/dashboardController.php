<?php

class dashboardController extends Controller {
    function dashboard() {

        require(ROOT . "Classes/User.php");
        session_start();
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        $this->render("dashboard");
    }
}

?>