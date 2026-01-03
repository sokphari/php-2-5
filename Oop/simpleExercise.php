<?php

    class Mobile{

        //1.data member
        private $price;
        private $name;
        private $qty; 
        //2.Function member
        //We call defualt constructure
        // public function __construct()
        // {
        //    $this->name = "Nafi";
        //    $this->price= 10;
        //    $this->qty = 10;

        // }
        //Constructure With parameter
        public function __construct($name,$price,$qty)
        {
            $this->name=$name;
            $this->price=$price;
            $this->qty=$qty;

        } 
        
        public function Show(){
            echo "Name :".$this->name."<br>";
            echo "Price:".$this->price."<br>";
            echo "Qty  :".$this->qty."<br>";
        }
       
    }
    //Creaate object
    $obj = new Mobile($name,$gender,...);
    $obj->Show();
    
?>