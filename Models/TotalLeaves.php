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
}
