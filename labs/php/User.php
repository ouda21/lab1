<?php
    include "Crud.php";
    require "DBConnector.php";
    Class User implements Crud
    {
        private $user_id;
        private $first_name;
        private $last_name;
        private $city_name;

        function __constractor($first_name,$last_name,$city_name)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->city_name = $city_name;
        }

        public function setUserId($user_id)
        {
            $this->user_id = $user_id;
        }
        public function getUserId()
        {
            return $this->user_id;
        }

        public function save()
        {
            $fname = $this->first_name;
            $lname = $this->last_name;
            $city = $this->city_name;
            $conn=new mysqli("localhost","root","","btc3205");
            if($conn->connect_error)
            {
                echo "Error:".$conn->connect_error;
            }
            $res = mysqli_query($conn,"INSERT INTO `users`(`first_name`, `last_name`, `user_city`) VALUES ('$fname','$lname','$city')");
            return $res;
        }

        public function readAll()
        {
            return null;
        }
        public function readUnique()
        {
            return null;
        }
        public function search()
        {
            return null;
        }
        public function update()
        {
            return null;
        }
        public function removeOne()
        {
            return null;
        }
        public function removeAll()
        {
            return null;
        }
    }