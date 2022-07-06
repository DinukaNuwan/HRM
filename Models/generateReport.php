<?php

class generateReports extends Model {
    function getEmployeeRecords($columns, $values) {
        $arr = [];

        //foreach ($values as $value) {
            //print_r($arr);
            //$arr = array_merge($arr, ["?"]);
        //}

        foreach ($columns as $column) {
            //print_r($column);
            $arr = array_merge($arr, [$column . "= ?"]);
        }

        //print_r($arr);

        //$sql1 = "SELECT * FROM employement WHERE (" . join(",", $columns) . ") = (" . join($values, ",") . ")";
        $sql = "SELECT * FROM employment WHERE " . join($arr, " AND ");
        //$sql1 = "SELECT * FROM employment;";

        $db = Database::getBdd();

        print_r($db);

        //$statement = $db->query($sql);

        $statement = $db->prepare($sql);

        //for ($i = 1; $i <= count($columns); $i++) {
            //print_r($i);
            //$statement->bindParam($i, $values[$i], PDO::PARAM_INT);
        //}

        $statement->execute($values);
        //print_r($statement->execute());
        print_r($statement->fetchAll());

        //print_r($statement);

        //print_r($statement->fetchAll(PDO::FETCH_ASSOC));

        print_r($sql);
        //print_r($sql1);
    }

    function getEmployeeDataGrouped($groupBy) {
        $sql = "SELECT * FROM employment ORDER BY $groupBy";
        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $grouped = [];

        foreach ($data as $row) {
            if (isset($grouped[$row[$groupBy]])) {
                $grouped[$row[$groupBy]] = array_merge($grouped[$row[$groupBy]], [$row]);
            } else {
                $grouped[$row[$groupBy]] = [$row];
            }
        }

        return $grouped;
        //print_r($grouped);
    }

    function getLeaveCount($start, $end) {
        $sql = "SELECT SUM(
            IF (
                $start < fromDate,
                If (
                    $end > toDate, DATEDIFF(toDate, fromDate), DATEDIFF(fromDate, $end)
                ),
                IF (
                    $end > toDate, DATEDIFF(toDate, $start), DATEDIFF($end, $start)
                )
            )
        ) FROM leave_application";

        print_r($sql);

        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        print_r($data);
    }
}