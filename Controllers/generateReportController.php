<?php

class generateReportController extends Controller
{
    function generateReport()
    {

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        // Authorization based on user role
        if ($user->getRole() == '4') {
            header('Location: unauthorized');
        } else {

            if (isset($_POST['submit'])) {
                // var_dump($_POST);
                if (isset($_POST['leave']) && $_POST['leave'] == 'yes') {
                    $_SESSION['department'] = $_POST['department'];
                    $_SESSION['from_date'] = $_POST['from_date'];
                    $_SESSION['to_date'] = $_POST['to_date'];
                    header('Location: totalleaves');
                } else if (isset($_POST['employee']) && $_POST['employee'] == 'yes') {
                    $_SESSION['group_by'] = $_POST['group'];
                    $_SESSION['group_by_value'] = null;
                    if ($_POST['group_dept'] != ""){
                        var_dump($_POST['group_dept']);
                        $_SESSION['group_by_value'] = $_POST['group_dept'];
                    }
                    if ($_POST['group_title'] != ""){
                        var_dump($_POST['group_title']);
                        $_SESSION['group_by_value'] = $_POST['group_title'];
                    }
                    if ($_POST['group_grade'] != ""){
                        var_dump($_POST['group_grade']);
                        $_SESSION['group_by_value'] = $_POST['group_grade'];
                    }
                    header('Location: empbygroup');
                } else if (isset($_POST['supervisor']) && $_POST['supervisor'] == 'yes') {
                    $_SESSION['sup_department'] = $_POST['sup_department'];
                    $_SESSION['sup_from_date'] = $_POST['sup_from_date'];
                    $_SESSION['sup_to_date'] = $_POST['sup_to_date'];
                    header('Location: supleaves');
                }
            }
        }

        //$model->getEmployeeRecords(array("job_title", "pay_grade"), array("A", "B"));

        //print_r($_POST);
        if (! empty($_POST['group'])) {
            //print_r($_POST);
            //$data = $model->getEmployeeDataGrouped($_POST['group']);
            //print_r($data);
            $this->set(["grouped" => $model->getEmployeeDataGrouped($_POST['group'])]);
            //$model->getEmployeeDataGrouped("pay_grade");
        } elseif (! empty($_POST['department'])) {
            //print_r($_POST);
            $model->getLeaveCount($_POST['from_date'], $_POST['to_date']);
        }

        $this->render("generatereport");
    }
}