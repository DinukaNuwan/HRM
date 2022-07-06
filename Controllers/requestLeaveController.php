<?php

class requestLeaveController extends Controller {
    function requestLeave() {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));
        
        
        require(ROOT . "Models/RequestLeave.php");
        
        $model = new requestLeaveModel();
        
        if (isset($_POST['submit'])) {
            $emp_id = $user->getEmpId();
            $leaveType = $_POST['leave_type'];
            $from = strval($_POST['leave_date']);
            $to = strval($_POST['return_date']);
            $reason = $_POST['reason'];
            $msg = $model->makeRequest($emp_id, $leaveType, $from, $to, $reason);
            if ($msg == 1) {
                header('Location: dashboard');
            } else {
                // echo 'Leave application failed';
                $this->set(array('error' => $msg));
            }
        }
        $this->render("RequestLeave");
    }
}
