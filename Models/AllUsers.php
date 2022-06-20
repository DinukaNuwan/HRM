<?php

    class allUsersModel extends Model{

        function getUsers($pgNum){
            $from = $pgNum*4 -3;
            $numOfUsersPerPage=4;
            $to = $from + $numOfUsersPerPage;

            //users personal data
            $sql = "SELECT  emp_id, firstname, lastname
                FROM    ( SELECT    ROW_NUMBER() OVER ( ORDER BY emp_id ) AS RowNum, emp_id, firstname, lastname
                        FROM      employee
                        ) AS RowConstrainedResult
                WHERE   RowNum >= :frm
                    AND RowNum < :to
                ORDER BY RowNum";
            
            $statement = $this->pdo->prepare($sql);
            $statement->execute(array(
                ':frm' => $from,
                ':to' => $to
            ));

            $userData = $statement->fetchAll(PDO::FETCH_ASSOC);

            var_dump($userData);

        }


    }

?>
