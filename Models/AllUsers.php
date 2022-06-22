<?php

    class allUsersModel extends Model{

        function getUsers($pgNum){
            $from = $pgNum*4 -3;
            $numOfUsersPerPage=4;
            $to = $from + $numOfUsersPerPage;

            //get num of users
            $sql = "SELECT COUNT(emp_id) as count FROM `user`";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(array());

            $numOfUsers = $statement->fetch(PDO::FETCH_ASSOC)['count'];

            //users personal data
            $sql = "SELECT  emp_id, firstname, lastname, user_role, photo
                    FROM    ( SELECT    ROW_NUMBER() OVER ( ORDER BY employee.emp_id ) AS RowNum, 
                            employee.emp_id, firstname, lastname, user_role.user_role, user.photo
                            FROM employee JOIN user JOIN user_role 
                            WHERE employee.emp_id = user.emp_id AND user.role = user_role.user_role_id
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

            $userData['count'] = $numOfUsers; //get 'count' variable from the array to decide the nmr of pages 
            var_dump($userData);

            return $userData;

        }


    }

?>
