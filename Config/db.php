<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost;dbname=dbproject", 'root', '');
        }
        return self::$bdd;
    }

    public static function insert($tableName, $columns, $values)
    {
        $pdo = Database::getBdd();
        $cols = join(", ", $columns);
        $val = rtrim(str_repeat("?,", count($columns)), ",");

        $stmt = $pdo->prepare("INSERT INTO $tableName ($cols) VALUES ($val)");

        // Check for the correct execution of the statement
        if (!$stmt->execute(($values))) {
            $stmt = null;
            return false;
        }

        $stmt = null;
        return true;

    }

    public function get($tableName, $columns, $fields, $values, $skip, $take) {
        

    }
}
?>