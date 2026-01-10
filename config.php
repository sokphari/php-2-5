<?php

    // $con = new mysqli('localhost','root','','sql_statement',3306);
    $con = mysqli_connect('localhost','root','','sql_statement');
    //localhost 127.0.0.1
    if($con){
        echo "data connection successfullly";
    }else{
        echo "Connection Not Found";
    }
?>