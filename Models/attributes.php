<?php

class attributes extends Model {
    function addCustomAttribute($attrName) {
        $sql = "ALTER TABLE custom_attributes ADD COLUMN $attrName VARCHAR(25) NOT NULL";
       
        $db = Database::getBdd();

        $statement = $db->prepare($sql);

        print_r($statement->execute());
    }

    function deleteCustomAttribute($attrName) {
        $sql = "ALTER TABLE custom_attributes DROP $attrName";
       
        $db = Database::getBdd();

        $statement = $db->prepare($sql);

        print_r($statement->execute());
    }

    function getColumns() {
        $sql = "SHOW COLUMNS FROM custom_attributes";
        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute();
        $columnData = $statement->fetchAll(PDO::FETCH_ASSOC);

        $columns = [];

        foreach ($columnData as $column) {
            if ($column["Field"] == "emp_id") {
                continue;
            }
            $columns = array_merge($columns, [$column["Field"]]);
        }

        return $columns;
    }
}