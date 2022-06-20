<?php

class homeController extends Controller {
    function home() {

        require(ROOT . "Models/home.php");

        $this->render("home");
    }
}