<?php

class empByGroupController extends Controller
{
    function empByGroup()
    {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        require(ROOT . "Models/EmpByGroup.php");
        $model = new empByGroupModel();

        $comp = $model->getCompanyDetails(1);
        $this->set(array('comp_name' => $comp['name']));
        $this->set(array('comp_address' => $comp['address']));

        $group_by = $_SESSION['group_by'];
        $this->set(array('group_by' => $group_by));

        $this->render("EmpByGroup");
    }
}
