<?php

class generateReportController extends Controller {
    function generateReport() {
        require(ROOT . "Models/generateReport.php");

        $model = new generateReports();

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

        require(ROOT . "Classes/User.php");
        session_start();
        require_once("../Helpers/checkLogin.php");
        $user = unserialize($_SESSION['user']);

        $this->set(array('username' => $user->getUsername()));
        $this->set(array('role' => $user->getRole()));

        if (isset($_POST['submit'])) {
            var_dump($_POST);
            if (isset($_POST['leave']) && $_POST['leave'] == 'yes') {
                $_SESSION['department'] = $_POST['department'];
                $_SESSION['from_date'] = $_POST['from_date'];
                $_SESSION['to_date'] = $_POST['to_date'];
                header('Location: totalleaves');
            }
            else if (isset($_POST['employee']) && $_POST['employee'] == 'yes') {
                $_SESSION['department'] = $_POST['department'];
            }
        }
        
        $this->render("GenerateReport");
    }
}
