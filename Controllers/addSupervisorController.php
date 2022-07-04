<?php

use FontLib\Table\Type\head;

class addSupervisorController extends Controller
{

    function addSupervisor($params)
    {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        if (isset($params[0][0]) && $params[0][0] != '') {
            // var_dump($params[0][0]);
            require(ROOT . "Models/AddSupervisor.php");
            $model = new addSupervisorModel();

            $emp_id = $params[0][0];
            $emp = $model->loadEmployee($emp_id);
            $supervisors = $model->loadSupervisorsFromDept($emp['dept_name'], $emp_id);
            // var_dump($supervisors);

            $this->set(array('emp_id' => $emp_id));
            $this->set(array('emp_name' => $emp['firstname']. ' ' . $emp['lastname']));
            $this->set(array('emp_dept' => $emp['dept_name']));
            $this->set(array('supervisors' => $supervisors));
        } else {
            header('Location: ' . WEBROOT . 'error');
        }

        $this->render('addsupervisor');
    }
}
