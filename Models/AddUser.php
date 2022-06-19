<?php

class addUserModel extends Model{


    function addNewUser($emp_id, $username, $password, $role, $photo){

        //get value of the role:
        $sql = "SELECT user_role_id FROM user_role WHERE user_role=:r";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':r' => $role));

        $role_id = $statement->fetch(PDO::FETCH_ASSOC)['user_role_id'];

        //add new user account
        $sql = "INSERT INTO user(emp_id, role, username, password, photo) 
        VALUES (:id, :r, :uname, :pw, :photo)";

        $statement = $this->pdo->prepare($sql);
        $statement->execute(array(
            ':id' => $emp_id,
            ':r' => $role_id,
            ':uname' => $username,
            ':pw' => $password,
            ':photo' => $photo
        ));
    }
}

?>