<?php

class empByGroupModel extends Model
{
    function getCompanyDetails($company_id)
    {
        $sql = "SELECT name, address FROM organization WHERE reg_number=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(':id' => $company_id));

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function getReport($type, $value)
    {
        //$type= {department, pay_grade, job_title}

        //gets data from the view
        // get the view created on your DB using the code on the HRDDL.sql (bottom)
        switch ($type) {
            case "Department":
                $sql = "SELECT * FROM reportingModule WHERE department=:val";
                break;
            case "Pay Grade":
                $sql = "SELECT * FROM reportingModule WHERE pay_grade=:val";
                break;
            case "Job Title":
                $sql = "SELECT * FROM reportingModule WHERE job_title=:val";
                break;
        }
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':val' => $value));

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
