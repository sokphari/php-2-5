<?php

    // Array 1D
    //syntax:
    // $arr1D = [];
    // $arr1D = array();

    // $arr1D = ["C","C++","Python","PHP",
    //         "Java","C#","Asp.net","C#","Asp.net","C#","Asp.net"
    //         ,"C#","Asp.net","C#","Asp.net","C#","Asp.net"
    //         ,"C#","Asp.net","C#","Asp.net","C#","Asp.net","C#"
    //         ,"Asp.net","C#","Asp.net"
    //         ,"C#","Asp.net","C#","Asp.net","C#","Asp.net"
    //     ];
    $arr1D = array("C","C++","Python","PHP",
            "Java","C#","Asp.net","C#","Asp.net","C#","Asp.net"
            ,"C#","Asp.net","C#","Asp.net","C#","Asp.net"
            ,"C#","Asp.net","C#","Asp.net","C#","Asp.net","C#"
            ,"Asp.net","C#","Asp.net"
            ,"C#","Asp.net","C#","Asp.net","C#","Asp.net"
    );

    $array = [
        'id' => '1'
    ];
    $array = [
        ['id'=>'1']
    ];
    

    // echo "<br> Langauge : ".$arr1D[0];
    // echo "<br> Langauge : ".$arr1D[1];
    // echo "<br> Langauge : ".$arr1D[2];
    // echo "<br> Langauge : ".$arr1D[3];
    // echo "<br> Langauge : ".$arr1D[4];
    // echo "<br> Langauge : ".$arr1D[5];
    // for($i=0; $i<count($arr1D); $i+=2){ // $i++ ==> i = i + 2;
    //     echo "<br>".$arr1D[$i];
    // }

    // print_r($arr1D);

    // foreach($arr1D as $index=>$value){
    //     echo "<br>".$index. " --> Langauge : ".$value;
    // }

    // for($i=0; 10<=10; $i++){  //i = 0
    //     echo $i;  // 0 ... 10
    // }



    // array 2D
    // syntax :
    // $array2D = [
    //     []
    // ]

    // $array2D = array(
    //     array()
    // )

    $array2D = [
        //column0 //column1 //column2
        ["Nafi","visal","sombathkk"], //row[0]
        ["Nafi1","visal1","sombath1"],//row[1]
        ["Nafi2","visal2","sombath2"],//row[2]
        ["Nafi3","visal3","sombath3"],//row[3]
        ["Nafi4","visal4","sombath4"],//row[4]
        ["Nafi5","visal5","sombath5"],//row[5]
        ["Nafi6","visal6","sombath6"],//row[6]
    ];

    //display data in row array2d
    // echo "<br>".$array2D[0][0];
    // echo "<br>".$array2D[5][1];
    // echo "<br>".$array2D[6][2];


    //more data in array2d use nested loop
    // for($i=0; $i<count($array2D); $i++){
    //     for($j=0; $j<count($array2D[$i]); $j++){
    //         echo "<br>".$array2D[$i][$j];
    //     }
    // }

    //small data in array 2d use nested loop
    // for($i=0; $i<7; $i++){
    //     for($j=0; $j<3; $j++){
    //         echo "<br>".$array2D[$i][$j];
    //     }
    // }


    // foreach($array2D as $key=>$item){
    //     foreach($item as $name){
    //         echo "<br>".$name;
            
    //     }
    // }




    



?>
