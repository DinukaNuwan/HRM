<?php

class loginController extends Controller {
    function login($parameters) {

        print_r($parameters);

        if (isset($_POST["login"])) {
            echo $_POST["email"];
            echo $_POST["password"];
        }

        $this->render("Login");
    }
}

?>