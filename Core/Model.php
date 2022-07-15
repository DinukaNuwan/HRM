<?php
    class Model
    {
        public $pdo;

        public function __construct()
        {
            $this->pdo = new PDO('mysql:host=localhost; port=3306;dbname=HRM', 'root' , '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
    }
?>