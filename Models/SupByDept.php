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
        $sql = "SELECT * FROM supervisorEmpByDept 
                WHERE department = :department_id
                AND supervisorEmpByDept .from >= :from_date AND supervisorEmpByDept .to <= :to_date 
                ORDER BY supervisorEmpByDept.supervisor_id;";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':department_id' => $deparment_id, 
            ':from_date' => $from, 
            ':to_date' => $to));

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}