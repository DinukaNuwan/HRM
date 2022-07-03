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
}
