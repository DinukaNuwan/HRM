<?php

class profileController extends Controller {
    function profile($params) {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        require(ROOT . "Models/Profile.php");
        $model = new profileModel();

        if(isset($params[0][0]) && $params[0][0] != '')
            $id = $params[0][0];
        else
            $id = $user->getEmpId();
        $this->set(array('id' => $id));

        $profile_details = $model->getProfile($id); //(returns array of details of given emp_id)
        // $profile_details = 0; //(returns array of details of given emp_id)

        if ($profile_details){
            $this->set(array('profile_details' => $profile_details));
            // var_dump($profile_details);
        }

        $this->render("Profile");
    }
}

?>