<?php

class attributes extends Model {
    function addCustomAttribute($attrName) {
        $sql = "ALTER TABLE employment ADD COLUMN $attrName VARCHAR(25) NOT NULL";
       
        $db = Database::getBdd();

        $statement = $db->prepare($sql);

        $statement->execute();
    }

    function deleteCustomAttribute($attrName) {
        $sql = "ALTER TABLE employment DROP $attrName";
       
        $db = Database::getBdd();

        $statement = $db->prepare($sql);

        $statement->execute();
    }

    function getColumns() {
        $sql = "SHOW COLUMNS FROM employment";
        $db = Database::getBdd();
        $statement = $db->prepare($sql);
        $statement->execute();
        $columnData = $statement->fetchAll(PDO::FETCH_ASSOC);

        $columns = [];

        foreach ($columnData as $column) {
            $columns = array_merge($columns, [$column["Field"]]);
        }

        return $columns;
    }
}