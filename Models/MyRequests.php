<?php

class myRequestsModel extends Model
{

    function getRequests($emp_id)
    {

        //shows requests of himself
        $sql = "SELECT leave_application.emp_id, employee.firstname, employee.lastname,
        application_id, leave_application_type.leave_type, leave_application.from, leave_application.to,
        reason, leave_application_status.status
        FROM `leave_application` 
        LEFT JOIN `leave_application_status` ON leave_application.status = leave_application_status.status_id
        LEFT JOIN `leave_application_type` ON leave_application.leave_type = leave_application_type.leave_type_id
        LEFT JOIN `employee` USING(emp_id)
        WHERE `employee`.`emp_id` = :id";

        $statement = $this->pdo->prepare($sql);
        $msg = ($statement->execute(array(
            ':id' => $emp_id
        )));

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
