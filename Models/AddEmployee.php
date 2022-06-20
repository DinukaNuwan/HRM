<?php

class addEmployeeModel extends Model{


    function addNewEmployee(
        $fname, $lname, $email, $mobile, $address, $dob, $maritalStatus,
        $jobTitle, $payGrade, $empStatus,
        $emg_name, $emg_mobile, $emg_relationship
    ){

        //get value of the marital Stts:
        $sql = "SELECT status_id FROM emp_marital_status WHERE status=:ms";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':ms' => $maritalStatus));

        $marital_stts_id = $statement->fetch(PDO::FETCH_ASSOC)['status_id'];

        //get value of the Job Title:
        $sql = "SELECT job_title_id FROM job_title WHERE job_title=:jt";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':jt' => $jobTitle));

        $job_title_id = $statement->fetch(PDO::FETCH_ASSOC)['job_title_id'];

        //get value of the Pay Grade:
        $sql = "SELECT pay_grade_id FROM pay_grade WHERE pay_grade=:pg";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':pg' => $payGrade));

        $pay_grade_id = $statement->fetch(PDO::FETCH_ASSOC)['pay_grade_id'];

        //get value of the Employement Status:
        $sql = "SELECT status_id FROM employment_status WHERE status=:stt";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':stt' => $empStatus));

        $emp_status_id = $statement->fetch(PDO::FETCH_ASSOC)['status_id'];

        //add new employee
        $sql = "INSERT INTO employee(firstname, lastname, address, date_of_birth, marital_status, email) 
        VALUES (:fname, :lname, :addr, :dob, :marital, :em)";

        $statement = $this->pdo->prepare($sql);
         $statement->execute(array(
            ':fname' => $fname,
            ':lname' => $lname,
            ':addr' => $address,
            ':dob' => $dob,
            ':marital' => $marital_stts_id,
            ':em' => $email
        ));

        //add employment details
        $sql = "SELECT emp_id FROM employee ORDER BY emp_id DESC LIMIT 1";
        $statement = $this->pdo->prepare($sql);

        $statement->execute();
        $emp_id = $statement->fetch(PDO::FETCH_ASSOC)['emp_id'];

        $sql = "INSERT INTO employment (emp_id, job_title, pay_grade, employment_status)
        VALUES (:id, :jt, :pg, :es)";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':id' => $emp_id,
            ':jt' => $job_title_id,
            ':pg' => $pay_grade_id,
            ':es' => $emp_status_id
        ));

        //add mobile number
        $sql = "INSERT INTO emp_mobile (emp_id, mobile)
        VALUES (:id, :mob)";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':id' => $emp_id,
            ':mob' => $mobile
        ));

        //add emergency contact details
        $sql = "INSERT INTO emergency (emp_id, name, relationship)
        VALUES (:id, :n, :r)";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':id' => $emp_id,
            ':n' => $emg_name,
            ':r' => $emg_relationship
        ));

        $sql = "SELECT emg_id FROM emergency ORDER BY emg_id DESC LIMIT 1";
        $statement = $this->pdo->prepare($sql);

        $statement->execute();
        $emg_id = $statement->fetch(PDO::FETCH_ASSOC)['emg_id'];

        $sql = "INSERT INTO emg_mobile (emg_id, mobile)
        VALUES (:id, :mob)";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':id' => $emg_id,
            ':mob' => $emg_mobile
        ));

    }
}

?>