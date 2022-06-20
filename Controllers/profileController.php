<?php

class profileController extends Controller {
    function profile() {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        // require(ROOT . "Models/Profile.php");

        // $model = new profileModel();

        // $model->getProfile(1); (returns array of details of emp_id 1)

        $this->render("Profile");
    }
}

?>