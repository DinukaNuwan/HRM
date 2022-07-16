<?php

class supByDeptModel extends Model
{
    function getCompanyDetails($company_id)
    {
        $sql = "SELECT name, address FROM organization WHERE reg_number=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $company_id));

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function getDeptName($department)
    {
        $sql = "SELECT dept_name FROM department WHERE dept_id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $department));

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function getLeavesBySupervisor($deparment_id, $from, $to)
    {   
        // var_dump($deparment_id, $from, $to);
        $sql = "SELECT COUNT(leave_application.emp_id) AS 'count', employee.firstname, employee.lastname ,
                sup.firstname AS 'sup_fname', sup.lastname AS 'sup_lname'
                FROM leave_application 
                JOIN employment USING(emp_id)
                JOIN employee USING (emp_id)
                JOIN supervise ON employment.emp_id = supervise.subordinate_id
                JOIN employee sup ON sup.emp_id = supervise.supervisor_id
                WHERE department = :department_id AND status = 2 
                AND leave_application.from >= :from_date AND leave_application.to <= :to_date 
                GROUP BY employee.emp_id ORDER BY supervise.supervisor_id;";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':department_id' => $deparment_id, 
            ':from_date' => $from, 
            ':to_date' => $to));

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}