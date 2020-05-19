<?php

    class Database_Connector
    {
        private $host = "localhost";
        private $name = "root";
        private $password = "";
        private $db_name = "btc3205";

        private $conn;

        public function connect()
        {
            $this->conn = new mysqli($this->host,$this->name, $this->password, $this->db_name);
            if(!$this->conn)
            {
                die('Could not connect to the database');
            }
            return $this->conn;
        }
    }
    