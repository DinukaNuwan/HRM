<?php

class addEmployeeController extends Controller {
    function addEmployee() {
        
        $this->render("AddEmployee");

        require(ROOT . "Models/AddEmployee.php");

        $model = new addEmployeeModel();

        if (isset($_POST['submit'])) {
            var_dump($_POST['submit']);
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];    
            $email = $_POST['email'];
            $mobile = $_POST['mobile_no'];
            $address = $_POST['address'];
            $dob = $_POST['birthday'];
            $maritalStatus = $_POST['marital_status'];
            $jobTitle = $_POST['job_title'];
            $payGrade = $_POST['pay_grade'];
            $empStatus = $_POST['emp_status'];
            $emg_name = $_POST['emergency_name'];
            $emg_mobile = $_POST['emergency_mobile_no'];
            $emg_relationship = $_POST['relationship'];
            $msg = $model->addNewEmployee(
                $fname, $lname, $email, $mobile, $address, $dob, $maritalStatus, $jobTitle, $payGrade, $empStatus, $emg_name, $emg_mobile, $emg_relationship
            );
            // echo $msg;
            // if ($msg == 1) {
            //     echo "Added employee successfully";
            // }
        }
    }
}
