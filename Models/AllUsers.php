<?php

    class allUsersModel extends Model{

        function getUsers($pgNum){
            $from = $pgNum*4 -3;
            $numOfUsersPerPage=4;
            $to = $from + $numOfUsersPerPage;

            //users personal data
            $sql = "SELECT emp_id, firstname, lastname, user_role, photo
            FROM (	SELECT ROW_NUMBER() OVER ( ORDER BY employee.emp_id ) AS RowNum, 
                    employee.emp_id, firstname, lastname, user_role.user_role, user.photo
                    FROM employee 
                      JOIN user USING (emp_id)
                      JOIN user_role ON user.role = user_role.user_role_id
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

            return $userData;

        
        }

        function getUserCount(){

            //get num of users
            $sql = "SELECT COUNT(emp_id) as count FROM `user`";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(array());

            $numOfUsers = $statement->fetch(PDO::FETCH_ASSOC)['count'];

            return $numOfUsers;

        }

        function hasSupervisor($emp_id){

            $sql = " SELECT employee.firstname
            FROM employee 
            JOIN supervise ON employee.emp_id = supervise.supervisor_id 
            JOIN employee e ON e.emp_id = supervise.subordinate_id
            WHERE e.emp_id = :id";

            $statement = $this->pdo->prepare($sql);
            $statement->execute(array(':id' => $emp_id));

            $supervisor_name = $statement->fetch(PDO::FETCH_ASSOC);

            if($supervisor_name == null){
                return false;
            }

            return $supervisor_name['firstname'];

        }


    }

?>
