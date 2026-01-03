<?php


    // Variable
    $sc1 = 100;
    $sc2 = 100;
    $sc3 = 100;
    $sc4 = 100;
    $sc5 = 100;
    $grade = '';

    // calculate
    $total = $sc1 + $sc2 + $sc3 + $sc4 + $sc5;
    $average = $total / 5;

    // condition
    if($average>=90 && $average<=100){
        $grade = 'A';
    }else if($average>=80 && $average<90){
        $grade = 'B';
    }else if($average>=70 && $average<80){
        $grade = 'C';
    }else if($average>=60 && $average<70){
        $grade = 'D';
    }else if($average>=50 && $average<60){
        $grade = 'E';
    }else{
        $grade = 'F';
    }


    // Output all data
    echo "This is score1 : ".$sc1."<br>";
    echo "This is score2 : ".$sc2."<br>";
    echo "This is score3 : ".$sc3."<br>";
    echo "This is score4 : ".$sc4."<br>";
    echo "This is score5 : ".$sc5."<br>";
    echo "This is Total  : ".$total."<br>";
    echo "This is Average: ".$average."<br>";
    echo "This is Grade  : ".$grade."<br>";