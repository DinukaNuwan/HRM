<?php

class configLeavesModel extends Model
{

    function getLeaves($payGrade)
    {


        $sql = "SELECT annual, casual, no_pay, maternity, mandatory_no_pay 
        FROM `leave_count` 
        JOIN pay_grade ON leave_count.pay_grade = pay_grade.pay_grade_id  
        WHERE pay_grade.pay_grade = :pg";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':pg' => $payGrade));

        $leaves = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $leaves;
    }

    function editLeaves($payGrade, $annual, $casual, $no_pay, $maternity, $mandatory_no_pay)
    {

        try {
            $this->pdo->beginTransaction();

            $sql = "UPDATE `leave_count` 
        SET `annual`=:ann,`casual`=:cas,`no_pay`=:np,`maternity`=:mat,`mandatory_no_pay`=:man_np 
        WHERE pay_grade = (SELECT pay_grade.pay_grade_id FROM pay_grade WHERE pay_grade.pay_grade=:pg)";

            $statement = $this->pdo->prepare($sql);

            $msg = $statement->execute(array(
                ':ann' => $annual,
                ':cas' => $casual,
                ':np' => $no_pay,
                ':mat' => $maternity,
                ':man_np' => $mandatory_no_pay,
                ':pg' => $payGrade
            ));
            $this->pdo->commit();

            return $msg;
        } catch (\Exception $e) {
            if ($this->pdo->inTransaction()) {
                $this->pdo->rollback();
                return "Error";
            }
            throw $e;
        }
    }
}
