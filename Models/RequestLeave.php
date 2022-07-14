<?php

class requestLeaveModel extends Model{

    function hasSupervisor($emp_id) {
        $sql = "SELECT supervisor_id FROM supervise WHERE subordinate_id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $emp_id));

        $supervisor_id = $statement->fetch(PDO::FETCH_ASSOC);
        return $supervisor_id;
    }

    function makeRequest($emp_id, $leaveType, $from, $to, $reason){

        // echo $emp_id, $leaveType, $noOfDays, $from, $to, $reason;

        //get leave type
        $sql = "SELECT leave_type_id FROM leave_application_type WHERE leave_type = :typ";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':typ' => $leaveType));

        $type = $statement->fetch(PDO::FETCH_ASSOC)['leave_type_id'];

        
        //check for the leave availability
        $numOfDays = ((strtotime($to) - strtotime($from)) / (60 * 60 * 24));

        $sql = "SELECT (leave_count.annual - emp_leave_count.annual) as rem_annual, 
        (leave_count.casual - emp_leave_count.casual) as rem_casual,
        (leave_count.maternity - emp_leave_count.maternity) as rem_maternity,
        (leave_count.no_pay - emp_leave_count.no_pay) as rem_no_pay,
        leave_count.annual, leave_count.casual, leave_count.maternity, leave_count.no_pay
        FROM employment 
        RIGHT JOIN pay_grade ON employment.pay_grade = pay_grade.pay_grade_id
        RIGHT JOIN leave_count ON leave_count.pay_grade = pay_grade.pay_grade_id
        LEFT JOIN emp_leave_count USING(emp_id)
        WHERE emp_id= :id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $emp_id));

        $data = $statement->fetch(PDO::FETCH_ASSOC);
        $remainingLeaves = $data["rem_".$leaveType];
        $allLeaves = $data[$leaveType];
        
        if($remainingLeaves == false && $allLeaves < $numOfDays){
            //return
            $msg = "Number of remaining leaves exceed.";
            return $msg;
        }
        elseif ($remainingLeaves != false && ($remainingLeaves < $numOfDays)){
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