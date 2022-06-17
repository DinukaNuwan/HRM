<?php

class loginController extends Controller {
    function login() {

        if (isset($_POST["login"])) {
            echo $_POST["email"];
            echo $_POST["password"];
        }

        $this->render("Login");
    }
}

?>