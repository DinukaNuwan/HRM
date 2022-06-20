<?php

class loginModel extends Model
{


    function authenticateUser($username, $password)
    {

        $sql = "SELECT password FROM user WHERE username = :un";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':un' => $username
        ));

        $db_password = $statement->fetch(PDO::FETCH_ASSOC);

        if ($db_password === false) {
            $msg = "Incorrect Username";
        } else if (!password_verify($password, $db_password['password'])) {
            $msg = "Incorrect Password";
        } else {
            $msg = true;
        }

        //route according to the $msg
        if ($msg == 1) {
            $sql = "SELECT emp_id, role, username, photo FROM user WHERE username = :un";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(array(
                ':un' => $username
            ));
            $res = $statement->fetch(PDO::FETCH_ASSOC);
            
            if ($res) {
                return new User($res['emp_id'], $res['role'], $res['username'], $res['photo']);
            }
        } else {
            return $msg;
        }
    }
}
