<?php

class requestLeaveModel extends Model{

    function makeRequest($emp_id, $leaveType, $noOfDays, $from, $to, $reason){

        $sql = "INSERT INTO leave_application (emp_id, leave_type, from, to, num_of_days, reason, status) 
        VALUES (:id, :typ, :frm, :to, :num , :reasn, :stt)";

        $statement = $this->pdo->prepare($sql);
        $msg = $statement->execute(array(
            ':id' => $emp_id,
            ':typ' => $leaveType,
            ':frm' => $from,
            ':to' => $to,
            ':num'=> $noOfDays,
            ':reasn' => $reason,
            ':stt' => 1
        ));

        return $msg;

    }

}

?>