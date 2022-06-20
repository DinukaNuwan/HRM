<?php

class profileController extends Controller {
    function profile() {

        // require(ROOT . "Models/Profile.php");

        // $model = new profileModel();

        // $model->getProfile(1); (returns array of details of emp_id 1)

        $this->render("Profile");
    }
}

?>