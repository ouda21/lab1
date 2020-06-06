<?php
    define('DB_HOST','localhost');
    define('DB_ROOT','root');
    define('DB_PASS','');
    define('DB_NAME','lab_db');

    class Database_Connect
    {
        private $conn;

        public function connect()
        {
            $this->conn = new mysqli(DB_HOST,DB_ROOT,DB_PASS,DB_NAME);
            if(!$this->conn)
            {
                die("Error while connecting to the database "+$conn->connect_error);
            }
            echo 'Connection successful';

            return $this->conn;
        }
    }