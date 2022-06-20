<?php

class allUsersController extends Controller {
    function allUsers() {
        $this->render("AllUsers");

        // require(ROOT . "Models/AllUsers.php");

        // $model = new allUsersModel();

        // $model->getUsers(2);(returns the user details of 4 users for the page 2 )
    }
}

?>