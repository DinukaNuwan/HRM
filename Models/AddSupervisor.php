<?php

class addSupervisorModel extends Model
{
    function addSupervisor($sub_id, $sup_id){

        $sql = "INSERT INTO supervise(subordinate_id, supervisor_id) 
        VALUES (:sub, :sup)";

        $statement = $this->pdo->prepare($sql);
        
        return ($statement->execute(array(
            ':sub' => $sub_id,
            ':sup' => $sup_id
        )));
    }

    function loadEmployee($emp_id){

        $sql = "SELECT employee.emp_id, employee.firstname, employee.lastname, department.dept_name FROM employee JOIN employment JOIN department
            WHERE employee.emp_id = employment.emp_id AND employment.department = department.dept_id AND employee.emp_id = :id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':id' => $emp_id));

        $res = $statement->fetch(PDO::FETCH_ASSOC);

        return $res;
    }

    function loadSupervisorsFromDept($dept_name, $emp_id){
        
        $sql = "SELECT employee.emp_id, employee.firstname, employee.lastname FROM employee JOIN employment JOIN department
            WHERE employee.emp_id = employment.emp_id AND employment.department = department.dept_id 
            AND dept_name = :dept AND employee.emp_id != :id";

        $statement = $this->pdo->prepare($sql);

        $statement->execute(array(':dept' => $dept_name, ':id' => $emp_id));

        $res = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

}