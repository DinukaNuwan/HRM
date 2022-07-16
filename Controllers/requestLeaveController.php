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

        $supervisor_name = $model->hasSupervisor($user->getEmpId());
        if (!$supervisor_name) {
            $this->set(array('no_sup' => "You cannot make a leave request as a supervisor has not been aassigned yet. Please contact the management for more information."));
        } else {
            $this->set(array('sup_name' => $supervisor_name));
        }
        
        if (isset($_POST['submit'])) {
            $emp_id = $user->getEmpId();
            $leaveType = $_POST['leave_type'];
            $from = strval($_POST['leave_date']);
            $to = strval($_POST['return_date']);
            $reason = $_POST['reason'];
            $msg = $model->makeRequest($emp_id, $leaveType, $from, $to, $reason);
            if ($msg == 1) {
                header('Location: myrequests');
            } else {
                // echo 'Leave application failed';
                $this->set(array('error' => $msg));
            }
        }
        $this->render("RequestLeave");
    }
}
