<?php

class generateReportModel extends Model{


    // function getReport($type, $value){
    //     //$type= {department, pay_grade, job_title}

    //     //gets data from the view
    //     // get the view created on your DB using the code on the HRDDL.sql (bottom)
    //     switch($type){
    //         case "department":
    //             $sql = "SELECT * FROM reportingModule WHERE department=:val";
    //             break;
    //         case "pay_grade":
    //             $sql = "SELECT * FROM reportingModule WHERE pay_grade=:val";
    //             break;
    //         case "job_title":
    //             $sql = "SELECT * FROM reportingModule WHERE job_title=:val";
    //             break;
    //     }
    //     $statement = $this->pdo->prepare($sql);

    //     $statement->execute(array(':val' => $value));

    //     $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    //     return $result;
    // }

}