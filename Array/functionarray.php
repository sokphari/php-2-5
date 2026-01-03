<?php

    $array = [10,20,30,40,50,60,70];
    for($i=0; $i<count($array); $i++){
        echo "<br>".$array[$i];
    }

    echo "<br>";
    echo "Element After use pop:";
    array_pop($array);
    foreach($array as $a ){
        echo "<br>".$a;
    }
    // print_r($array);

    echo "<br>";
    echo "Element After use shirt:";
    array_shift($array);
    foreach($array as $a ){
        echo "<br>".$a;
    }

    echo "<br>";
     echo "Element After use push:";
    array_push($array,1000);
    foreach($array as $a ){
        echo "<br>".$a;
    }

    echo "<br>";
    echo "Element After use Array slice:";
    $arr=array_slice($array,0,3);
    foreach($arr as $a ){
        echo "<br>".$a;
    }


    echo "<br>";
    $arr1 = [100,200,300,400,500];
    $arr2 = [600,700,800,900,1000];
    $numArr = array_merge($arr1,$arr2);
    echo "Element After use Array_merge :";
    foreach($numArr as $value){
        echo "<br>".$value;
    }

?>