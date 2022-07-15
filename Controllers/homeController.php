<?php

class homeController extends Controller {
    function home() {

        require(ROOT . "Classes/User.php");
        session_start();
        if (isset($_SESSION['user'])) {
            header('Location: dashboard');
        }

        require(ROOT . "Models/home.php");

        $this->render("home");
    }
}