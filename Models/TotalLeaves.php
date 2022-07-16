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

       //get data from the view

       $sql = "SELECT * FROM totalLeavesReport
        WHERE department = :department_id
        AND totalLeavesReport.from >= :from_date AND totalLeavesReport.to <= :to_date 
        GROUP BY leave_type ORDER BY totalLeavesReport.leave_id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':department_id' => $deparment_id, 
            ':from_date' => $from, 
            ':to_date' => $to));

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }
}
