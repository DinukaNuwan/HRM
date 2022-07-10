<?php

class totalLeavesModel extends Model
{
    function getDeptName($department)
    {
        $sql = "SELECT dept_name FROM department WHERE dept_id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $department));

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function getCompanyDetails($company_id)
    {
        $sql = "SELECT name, address FROM organization WHERE reg_number=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $company_id));

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function getLeaves($deparment_id, $from, $to)
    {   
        // var_dump($deparment_id, $from, $to);
        $sql = "SELECT COUNT(leave_application_type.leave_type) as 'count', leave_application_type.leave_type_id as 'leave_id', leave_application_type.leave_type, department 
        FROM leave_application 
        JOIN employment USING(emp_id)
        JOIN leave_application_type  ON leave_application.leave_type = leave_application_type.leave_type_id
        WHERE department = :department_id AND status = 2 
        AND leave_application.from >= :from_date AND leave_application.to <= :to_date 
        GROUP BY leave_type ORDER BY leave_application_type.leave_type_id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':department_id' => $deparment_id, 
            ':from_date' => $from, 
            ':to_date' => $to));

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}
