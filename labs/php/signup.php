<?php

    include_once "crud.php";
    include_once "db-connect.php";
    Class SignUp implements Crud
    {
        private $fname;
        private $lname;
        private $email;
        private $city;
        private $password;

        public function __construct($f,$l,$c,$e,$p)
        {
            $this->fname = $f;
            $this->lname = $l;
            $this->city = $c;
            $this->email = $e;
            $this->password = $p;
        }
        
        public function checkUser()
        {
            $db = new Database_Connector;
            $conn = $db->connect();
            
            $stmt = $conn->prepare("SELECT * FROM `users` WHERE email= ?");
            $stmt->bind_param("s",$this->email);
            $stmt->execute();
            $result = $stmt->get_result();
            $res = $result->fetch_assoc();
            
            if($res){
                return true;
            }
            else{
                return false;
            }
        }

        public function save()
        {
            $db = new Database_Connector;
            $conn = $db->connect();
            $stmt = $conn->prepare("INSERT INTO `users`(`full_name`, `last_name`, `user_city`, `email`, `pass`) VALUES (?,?,?,?,?)");
            $stmt->bind_param("sssss",$this->fname,$this->lname,$this->city,$this->email,$this->password);
            if($stmt->execute())
            {
                echo "Insertion successfully";
            }
            else
            {
                die("Connection error".mysqli_error($conn));
            }
        }
    }