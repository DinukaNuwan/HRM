<?php

    class editUserModel extends Model{

        function edit($emp_id,$firstname, $lastname, $address, $dob, $photo, $mobile){
            
            $sql = "UPDATE employee SET firstname = :fn, lastname = :ln, address = :addr, date_of_birth = :dob, photo = :ph WHERE emp_id = :id";

            $statement = $this->pdo->prepare($sql);
            $statement->execute(array(
                ':fn' => $firstname,
                ':ln' => $lastname,
                ':addr' => $address,
                ':dob' => $dob,
                ':ph' => $photo,
                ':id' => $emp_id
            ));

            $sql = "INSERT INTO emp_mobile (emp_id, mobile) VALUES (:id, :mob)";

            $statement = $this->pdo->prepare($sql);
            $msg = $statement->execute(array(
                ':id' => $emp_id,
                ':mob' => $mobile
            ));

            return $msg;
        }

    }

?>