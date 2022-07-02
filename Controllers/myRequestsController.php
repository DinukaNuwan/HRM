<?php

class myRequestsController extends Controller
{

    function myRequests()
    {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        require(ROOT . "Models/MyRequests.php");

        $model = new myRequestsModel();

        $id = $user->getEmpId();
        $res = $model->getRequests($id);

        // var_dump($res);
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

        $this->render('myrequests');
    }
}
