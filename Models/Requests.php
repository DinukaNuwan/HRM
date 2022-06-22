<?php

class requestsModel extends Model{

    function getRequests($emp_id, $role){

        if ($role == "General Manager"){

            //return only his leave applications
            $sql = "SELECT leave_application.emp_id, employee.firstname, employee.lastname,
            application_id, leave_application_type.leave_type, leave_application.from, leave_application.to,
            reason, leave_application_status.status
            FROM `leave_application` JOIN `leave_application_status`
            JOIN `leave_application_type`JOIN `employee`
            WHERE `leave_application`.`leave_type`=`leave_application_type`.`leave_type_id`
            AND `leave_application`.`status` = `leave_application_status`.`status_id`
            AND `leave_application`.`emp_id` = `employee`.`emp_id`
            AND `employee`.`emp_id` = :id;";

            $statement = $this->pdo->prepare($sql);
            $msg = ( $statement->execute(array(
                ':id' => $emp_id,)));

            return $msg;

        }

        else{

            //return all leave applications
            $sql = "SELECT leave_application.emp_id, employee.firstname, employee.lastname,
            application_id, leave_application_type.leave_type, leave_application.from, leave_application.to,
            reason, leave_application_status.status
            FROM `leave_application` JOIN `leave_application_status`
            JOIN `leave_application_type`JOIN `employee`
            WHERE `leave_application`.`leave_type`=`leave_application_type`.`leave_type_id`
            AND `leave_application`.`status` = `leave_application_status`.`status_id`
            AND `leave_application`.`emp_id` = `employee`.`emp_id`;";

            $statement = $this->pdo->prepare($sql);
            $msg = ( $statement->execute(array()));

            return $msg;
        }

    }

    function acceptLeave($req_id){

        $sql = "UPDATE leave_application SET 
        status = 2 
        WHERE application_id = :id";

        $statement = $this->pdo->prepare($sql);
        $msg = ( $statement->execute(array(':id' => $req_id)));

        return $msg;
    }

    function rejectLeave($req_id, $feedback){
        
        $sql = "UPDATE leave_application SET 
        status = 3, feedback = :fb 
        WHERE application_id = :id";

        $statement = $this->pdo->prepare($sql);
        $msg = ( $statement->execute(array(
            ':fb' => $feedback,
            ':id' => $req_id)));

        return $msg;
    }
}