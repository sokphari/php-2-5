<?php

    include ('User.php');
    include ('Interface.php');

    class Employee extends User implements Tax{

        protected $position;
        protected $salary;

        public function __construct($name, $gender, $email, $password , $position , $salary)
        {
            parent::__construct($name,$gender,$email,$password);
            $this->position = $position;
            $this->salary   = $salary;
        }

        public function displaydata(){
            parent::Display();
            echo "<h3>{$this->position}</h3>";
            echo "<h3>{$this->salary}</h3>";
            echo "<h3>{$this->income()}</h3>";
            echo "<h3>{$this->tax()}</h3>";

        }

        //Overide
        public function income()
        {
            return $this->salary * 12;
        }
        public function tax()
        {
            return $this->salary * 0.1;   //10%
        }

    }
    //create object
    $emp = new Employee("Visal","Male","VisalKh@gmail.com","123456","full stack","1200");
    $emp->displaydata();
    echo "This your salary".$emp->income();

?>