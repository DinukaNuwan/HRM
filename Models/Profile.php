<?php

class profileModel extends Model
{

    function getProfile($emp_id)
    {

        $sql = "SELECT firstname, lastname, username, email, date_of_birth, marital_status, user.role, address, job_title.job_title, user.photo, employment.pay_grade, employment.employment_status, employment.department, emergency.name, emergency.relationship, emp_mobile.mobile, emg_mobile.mobile as emgMobile 
            FROM employee JOIN employment JOIN job_title JOIN user JOIN emergency JOIN emp_mobile JOIN emg_mobile
            WHERE employment.job_title = job_title.job_title_id AND employee.emp_id = employment.emp_id 
            AND employee.emp_id = user.emp_id AND employee.emp_id = emergency.emp_id AND employee.emp_id = emp_mobile.emp_id AND emergency.emg_id = emg_mobile.emg_id AND employee.emp_id = :id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':id' => $emp_id
        ));

        $empData = $statement->fetch(PDO::FETCH_ASSOC);

        // var_dump($empData);

        return $empData;
    }

    function updateProfile(
        $emp_id,
        $fname,
        $lname,
        $email,
        $mobile,
        $address,
        $dob,
        $maritalStatus,
        $jobTitle,
        $payGrade,
        $empStatus,
        $department,
        $emg_name,
        $emg_mobile,
        $emg_relationship
    ) {
        //get id of the marital Stts:
        $sql = "SELECT status_id FROM emp_marital_status WHERE status=:ms";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':ms' => $maritalStatus));

        $marital_stts_id = $statement->fetch(PDO::FETCH_ASSOC)['status_id'];

        //get id of the Job Title:
        $sql = "SELECT job_title_id FROM job_title WHERE job_title=:jt";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':jt' => $jobTitle));

        $job_title_id = $statement->fetch(PDO::FETCH_ASSOC)['job_title_id'];

        //get id of the Pay Grade:
        $sql = "SELECT pay_grade_id FROM pay_grade WHERE pay_grade=:pg";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':pg' => $payGrade));

        $pay_grade_id = $statement->fetch(PDO::FETCH_ASSOC)['pay_grade_id'];

        //get id of the Employement Status:
        $sql = "SELECT status_id FROM employment_status WHERE status=:stt";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':stt' => $empStatus));

        $emp_status_id = $statement->fetch(PDO::FETCH_ASSOC)['status_id'];

        //get id of the department:
        $sql = "SELECT dept_id FROM department WHERE dept_name=:dp";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':dp' => $department));

        $department_id = $statement->fetch(PDO::FETCH_ASSOC)['dept_id'];

        //update employee
        $sql = "UPDATE employee
        SET firstname=:fname,lastname=:lname,address=:addr,date_of_birth=:dob,marital_status=:marital,email=:em
        WHERE emp_id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':fname' => $fname,
            ':lname' => $lname,
            ':addr' => $address,
            ':dob' => $dob,
            ':marital' => $marital_stts_id,
            ':em' => $email,
            ':id' => $emp_id
        ));

        //update employment details
        $sql = "UPDATE employment
        SET job_title=:jt,pay_grade=:pg,employment_status=:es,department=:dp
        WHERE emp_id=:id";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':jt' => $job_title_id,
            ':pg' => $pay_grade_id,
            ':es' => $emp_status_id,
            ':dp' => $department_id,
            ':id' => $emp_id
        ));

        //update mobile number
        $sql = "UPDATE emp_mobile
        SET mobile=:mob
        WHERE emp_id=:id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':mob' => $mobile,
            ':id' => $emp_id
            
        ));

        //get imergency id
        $sql = "SELECT emg_id FROM emergency WHERE emp_id=:id";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':id' => $emp_id));
        $emg_id = $statement->fetch(PDO::FETCH_ASSOC)['emg_id'];

        //update emergency contact details
        $sql = "UPDATE emergency
        SET name=:n,relationship=:r
        WHERE emg_id=:id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(
            ':n' => $emg_name,
            ':r' => $emg_relationship,
            ':id' => $emg_id
        ));

        //update emergency number
        $sql = "UPDATE emg_mobile
        SET mobile=:mob
        WHERE emg_id=:id";

        $statement = $this->pdo->prepare($sql);

        $msg = $statement->execute(array(
            ':mob' => $emg_mobile,
            ':id' => $emg_id
        ));

        return $msg;
    }

    function getColumns() {
        $sql = "SHOW COLUMNS FROM custom_attributes";
        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute();
        $columnData = $statement->fetchAll(PDO::FETCH_ASSOC);

        $columns = [];

        foreach ($columnData as $column) {
            if ($column["Field"] == "emp_id") {
                continue;
            }
            $columns = array_merge($columns, [$column["Field"]]);
        }

        return $columns;
    }

    function getCustomAttr($emp_id) {
        $sql = "SELECT * FROM custom_attributes WHERE emp_id=$emp_id";
        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $data[0];
    }

    function setCustomAttr($values, $emp_id) {
        $columns = $this->getColumns();

        $arr = [];

        foreach ($columns as $column) {
            $arr = array_merge($arr, ["$column = ?"]);
        }

        $sql = "UPDATE custom_attributes SET " . join(",", $arr) . " WHERE emp_id = $emp_id";

        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute($values);
    }
}
