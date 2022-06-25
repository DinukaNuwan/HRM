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
            // var_dump($_POST);
            $emp_id = $user->getEmpId();
            $leaveType = $_POST['leave_type'];
            // $noOfDays = $_POST['no_of_days'];
            $from = strval($_POST['leave_date']);
            $to = strval($_POST['return_date']);
            $reason = $_POST['reason'];
            $msg = $model->makeRequest($emp_id, $leaveType, $from, $to, $reason);
            // $msg = $model->makeRequest(4, 1, 1, '2020-01-01', '2020-01-02', 'szcszvcsdfadzv');
            // echo $emp_id, $leaveType, $noOfDays, $from, $to, $reason;
            if ($msg == 1) {
                header('Location: dashboard');
            } else {
                var_dump($msg);
                echo 'Leave application failed';
            }
        }
        $this->render("RequestLeave");
    }
}
