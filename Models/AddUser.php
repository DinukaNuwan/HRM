<?php

class addUserModel extends Model{


    function addNewUser($emp_id, $username, $password, $role, $photo){

        try{
            $this->pdo->beginTransaction();

        //get value of the role:
        $sql = "SELECT user_role_id FROM user_role WHERE user_role=:r";
        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':r' => $role));

        $role_id = $statement->fetch(PDO::FETCH_ASSOC)['user_role_id'];

        //check emp_id is valid

        $sql = "SELECT emp_id FROM employee WHERE emp_id=:id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':id' => $emp_id));

        $fetched_id = $statement->fetch(PDO::FETCH_ASSOC);

        if ($fetched_id == NULL){
            $msg = "Invalid emp_id";
            return $msg;
        }

        //check user acc is already exist
        $sql = "SELECT emp_id FROM user WHERE emp_id=:id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':id' => $emp_id));

        $fetched_id = $statement->fetch(PDO::FETCH_ASSOC);

        if ($fetched_id != NULL){
            $msg = "User Account Already Exists";
            return $msg;
        }


        //add new user account
        $sql = "INSERT INTO user(emp_id, role, username, password, photo) 
        VALUES (:id, :r, :uname, :pw, :photo)";

        $statement = $this->pdo->prepare($sql);
        $msg = ( $statement->execute(array(
            ':id' => $emp_id,
            ':r' => $role_id,
            ':uname' => $username,
            ':pw' => $password,
            ':photo' => $photo
        )));
        $this->pdo->commit();


        return $msg;
    }
    catch (\Exception $e) {
        if ($this->pdo->inTransaction()) {
            $this->pdo->rollback();
            return "Error";
        }
        throw $e;
    }
    }

    function loadEmployees() {
        $sql = "SELECT emp_id, firstname, lastname FROM employee";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}
