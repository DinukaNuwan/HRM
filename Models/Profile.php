<?php

    class profileModel extends Model{

        function getProfile($emp_id){
            
            $sql = "SELECT firstname, lastname, username, email, date_of_birth, marital_status, user.role, address, job_title.job_title, user.photo, employment.pay_grade, employment.employment_status, emergency.name, emergency.relationship 
            FROM employee JOIN employment JOIN job_title JOIN user JOIN emergency
            WHERE employment.job_title = job_title.job_title_id AND employee.emp_id = employment.emp_id 
            AND employee.emp_id = user.emp_id AND employee.emp_id = emergency.emp_id AND employee.emp_id = :id";

            $statement = $this->pdo->prepare($sql);
            $statement->execute(array(
                ':id' => $emp_id
            ));

            $empData = $statement->fetch(PDO::FETCH_ASSOC);

            // var_dump($empData);

            return $empData;

        }


    }
