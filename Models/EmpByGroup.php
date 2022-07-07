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
}
