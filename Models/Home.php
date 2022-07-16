<?php

class homeModel extends Model
{
    function loadCompanyDetails($reg_number) {
        $sql = "SELECT name, address FROM organization WHERE reg_number = :reg_number LIMIT 1";
        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':reg_number' => $reg_number
        ));
        $company = $statement->fetch(PDO::FETCH_ASSOC);

        return $company;
    }
}
