<?php

class homeController extends Controller {
    function home() {

        require(ROOT . "Classes/User.php");
        session_start();
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('photo' => $user->getPhoto()));

        require(ROOT . "Models/home.php");

        $this->render("home");
    }
}