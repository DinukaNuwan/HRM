<?php

class requestsController extends Controller
{
    function requests()
    {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));
        $this->set(array('is_supervisor' => $user->getIsSupervisor()));

        // Authorization based on supervisor or not
        if (!$user->getIsSupervisor() && !$user->getRole() == '1') {
            header('Location: unauthorized');
        } else {

            require(ROOT . "Models/Requests.php");
            $model = new requestsModel();

            $id = $user->getEmpId();
            $res = $model->getRequests($id);

            if ($res == "You need to be a supervisor to access this") {
                $res = $model->getAllRequests();
                // var_dump($res);
            }
            
            $pending_requests = [];
            $approved_requests = [];
            $rejected_requests = [];
            foreach ($res as $request) {
                if ($request['status'] == 'pending') {
                    $pending_requests[] = $request;
                } else if ($request['status'] == 'approved') {
                    $approved_requests[] = $request;
                } else if ($request['status'] == 'rejected') {
                    $rejected_requests[] = $request;
                }
            }
            $this->set(array('pending_requests' => $pending_requests));
            $this->set(array('approved_requests' => $approved_requests));
            $this->set(array('rejected_requests' => $rejected_requests));

            if (isset($_POST['accept'])) {
                $msg = $model->acceptLeave($_POST['application_id'], $_POST['emp_id'], $_POST['type'], $_POST['from'], $_POST['to']);
                header('Location: requests');
            }
            if (isset($_POST['reject'])) {
                $msg = $model->rejectLeave($_POST['application_id'], $_POST['emp_id']);
                header('Location: requests');
            }
            
            $this->render("Requests");
        }
    }
}
