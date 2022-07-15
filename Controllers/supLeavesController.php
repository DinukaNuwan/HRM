<?php

class supLeavesController extends Controller
{
    function supleaves()
    {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        require(ROOT . "Models/SupByDept.php");
        $model = new supByDeptModel();

        if (isset($_SESSION['sup_department'])) {

            $sup_deparment = ($_SESSION['sup_department']);
            $sup_from_date = ($_SESSION['sup_from_date']);
            $sup_to_date = ($_SESSION['sup_to_date']);

            $res = $model->getDeptName($sup_deparment);
            $comp = $model->getCompanyDetails(1);

            $leave_data = $model->getLeavesBySupervisor($sup_deparment, $sup_from_date, $sup_to_date);
            // var_dump($leave_data);
            // if (count($leave_data) == 0) {
            //     $this->set(array('empty' => true));
            // } else {
            //     $total = 0;
            //     foreach ($leave_data as $data) {
            //         $this->set(array($data['leave_type'] => $data['count']));
            //         $total = $total + $data['count'];
            //     }
            //     $this->set(array('total' => $total));
            // }
            $this->set(array('leave_data' => $leave_data));
                
            

            $this->set(array('sup_deparment_name' => $res['dept_name']));
            $this->set(array('sup_from_date' => $sup_from_date));
            $this->set(array('sup_to_date' => $sup_to_date));
            $this->set(array('comp_name' => $comp['name']));
            $this->set(array('comp_address' => $comp['address']));

            $this->render("supleaves");
        } else {
            header('Location: generatereport');
        }
    }
}
