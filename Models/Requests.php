<?php

class requestsModel extends Model{


    //accessed only by sepervisors

    function getRequests($emp_id){


        //check if logged user is a supervisor

        $sql = "SELECT supervisor_id FROM supervise WHERE supervisor_id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $emp_id,));
        $res = $statement->fetch(PDO::FETCH_ASSOC);
        
        if( $res == false){
            //not a supervisor
            $msg = "You need to be a supervisor to access this";
            return $msg;
        }

        else{
            //supervisor

            //shows requests of his subordinates
            $sql = "SELECT leave_application.emp_id, employee.firstname, employee.lastname,
            application_id, leave_application_type.leave_type, leave_application.from, leave_application.to,
            reason, leave_application_status.status
            FROM `leave_application` JOIN `leave_application_status`
            JOIN `leave_application_type`JOIN `employee` JOIN `supervise`
            WHERE `leave_application`.`leave_type`=`leave_application_type`.`leave_type_id`
            AND `leave_application`.`status` = `leave_application_status`.`status_id`
            AND `leave_application`.`emp_id` = `employee`.`emp_id` AND `supervise`.`subordinate_id` = `employee`.`emp_id`
            AND `supervise`.`supervisor_id` = :sup_id";

            $statement = $this->pdo->prepare($sql);
            $msg = ( $statement->execute(array(
                ':sup_id' => $emp_id)));

            return $statement->fetchAll(PDO::FETCH_ASSOC);

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

    function rejectLeave($req_id){
        
        $sql = "UPDATE leave_application SET 
        status = 3
        WHERE application_id = :id";

        $statement = $this->pdo->prepare($sql);
        $msg = ( $statement->execute(array(
            ':id' => $req_id)));

        return $msg;
    }
}