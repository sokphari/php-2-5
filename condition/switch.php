<?php


    // $day = "Fri";


    // switch($day){
       
    //     case "Tue" : 
    //         echo "Today is Tue";
    //         break;
    //     case "Mon" :
    //         echo "Today is Mon";
    //         break;
    //     case "Thu":
    //         echo "Today is Thu";
    //         break;
    //     case "Sat" : 
    //         echo "Today is Sat";
    //         break;
    //     case "Sun" :
    //         echo "Today is Sun";
    //         break;

    //     case "Wed" :
    //         echo "Today is Web";
    //         break;
    //     case "Fri":
    //         echo "Today is Fri";
    //         break;
    //     default:
    //         echo "Invalide Date";
    //         exit();
    // }



    //use arimathic operator 
    //operator + , - , * , / , %

    $a = 10;
    $b = 10;
    $operator = "/";

    switch($operator){

        case "+":
             echo " A + B : ". $a + $b;
            break;
        case "-":
            echo " A - B : ".$a - $b;
            break;
        case "*":
            echo " A * B : ". $a*$b;
        break;
        case "/":
            if($b!=0){
               echo " A / B : ".$a/$b; 
            }else{
                echo "b is not divide a";
            }
        break;
    }



?>