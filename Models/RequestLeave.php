<?php

class requestLeaveModel extends Model{

    function makeRequest($emp_id, $leaveType, $from, $to, $reason){

        // echo $emp_id, $leaveType, $noOfDays, $from, $to, $reason;

        //get leave type
        $sql = "SELECT leave_type_id FROM leave_application_type WHERE leave_type = :typ";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':typ' => $leaveType));

        $type = $statement->fetch(PDO::FETCH_ASSOC)['leave_type_id'];

        
        //check for the leave availability
        $numOfDays = ((strtotime($to) - strtotime($from)) / (60 * 60 * 24));

        $sql = "SELECT annual, casual, no_pay, maternity, mandatory_no_pay FROM employment JOIN pay_grade JOIN leave_count 
            WHERE leave_count.pay_grade = pay_grade.pay_grade_id AND employment.pay_grade = pay_grade.pay_grade_id 
            AND employment.emp_id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $emp_id));

        $all = $statement->fetch(PDO::FETCH_ASSOC)[$leaveType];

        $sql = "SELECT annual, casual, no_pay, maternity FROM emp_leave_count WHERE emp_leave_count.emp_id = :id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':id' => $emp_id));

        $taken = $statement->fetch(PDO::FETCH_ASSOC);
        
        if($taken == false && $all < $numOfDays){
            //return
            $msg = "Number of remaining leaves exceed.";
            return $msg;
        }
        elseif ($taken != false && ($all-$taken[$leaveType] < $numOfDays)){
            //return
            $msg = "Number of remaining leaves exceed.";
            return $msg;
        }
        else{
            //run sql
            $sql = "INSERT INTO leave_application (`emp_id`, `leave_type`, `from`, `to`, `reason`, `status`) 
            VALUES (:id, :typ, :frm, :to , :reasn, :stt)";

            $statement = $this->pdo->prepare($sql);
            $msg = $statement->execute(array(
                ':id' => $emp_id,
                ':typ' => $type,
                ':frm' => $from,
                ':to' => $to,
                ':reasn' => $reason,
                ':stt' => 1
            ));

            return $msg;
        }
    }

}

?>