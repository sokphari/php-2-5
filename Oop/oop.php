<?php

    //oop stard : Object oriented Programming
    //concept oop:
    //1.inheritance
    //2.abstraction
    //3.encasulation
    //4.polymorphim

    class Car{

        //1.access motify 
        //properties : public , private , protected

        //2.Data member we can call variable

        //3.function member or we can call Method

        public $name = "Sombath";
        private $age;
        protected $gender;

        public function setAge($age){
            $this->age = $age;
        }

        public function Show(){
            echo "Name : ".$this->name."<br>";
            echo "Age : ".$this->age."<br>";
            echo "Gender : ".$this->gender."<br>";
        }  

    }
    $car = new Car(); //create object
    $car->name="Hour";
    $car->setAge(20);
    // $car->gender="male";
    $car->Show();

?>