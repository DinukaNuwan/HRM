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