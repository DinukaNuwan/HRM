<?php

class totalLeavesController extends Controller
{

    function totalLeaves()
    {
        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        require(ROOT . "Models/TotalLeaves.php");
        $model = new totalLeavesModel();

        if (isset($_SESSION['department'])) {

            $deparment = ($_SESSION['department']);
            $from_date = ($_SESSION['from_date']);
            $to_date = ($_SESSION['to_date']);

            $res = $model->getDeptName($deparment);
            $comp = $model->getCompanyDetails(1);

            $leave_data = $model->getLeaves($deparment, $from_date, $to_date);
            // var_dump($leave_data);
            if (count($leave_data) == 0) {
                $this->set(array('empty' => true));
            } else {
                $total = 0;
                foreach ($leave_data as $data) {
                    $this->set(array($data['leave_type'] => $data['count']));
                    $total = $total + $data['count'];
                }
                $this->set(array('total' => $total));
            }

            $this->set(array('deparment_name' => $res['dept_name']));
            $this->set(array('from_date' => $from_date));
            $this->set(array('to_date' => $to_date));
            $this->set(array('comp_name' => $comp['name']));
            $this->set(array('comp_address' => $comp['address']));

            if (isset($_POST['submit'])) {
                require(ROOT . "Helpers/pdfConverter.php");
                $pdfConverter = new pdfConverter();
                // echo WEBROOT . 'Views/TotalLeaves/totalviews.php';
                $pdfConverter->convert(WEBROOT . 'Views/TotalLeaves/totalleaves.php', 'dept_total_leaves');
            }

            $this->render("TotalLeaves");
        } else {
            header('Location: generatereport');
        }
    }
}
