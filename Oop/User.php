<?php

    class User{

        //Data member
        protected $name;
        protected $gender;
        protected $email;
        protected $password;

        //use constructure with parameter
        public function __construct($name,$gender,$email,$password)
        {
                $this->name = $name;
                $this->gender=$gender;
                $this->email=$email;
                $this->password=$password;
        }

        //create method for display data
        public function Display(){
            echo "$this->name<br>";
            echo "$this->gender<br>";
            echo "$this->email<br>";
            echo "$this->password<br>";
        }

    }

?>