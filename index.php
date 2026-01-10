<?php

    include ('config.php');

    $sql = "INSERT INTO `products`(`product_id`, `product_name`, `price`, `stock`, `category_id`) 
    VALUES (null,'Mac',999.99,10,3)";

    $respones = $con->query($sql);
    if(!$respones){
        echo '<script>alert("Data Instert Not Found Check Your Code ☺️")</script>';
    }else{
        echo '<script>alert("Data Instert Successfully ✅")</script>';
    }


        try{

        $sql = "DELETE FROM `products` WHERE `product_id` = 5 ";
        $respones = mysqli_query($con,$sql);
        if(!$respones){
            echo '<script>alert("Data delete Not Found Check Your Code ☺️")</script>';
        }else{
            echo '<script>alert("Data delete Successfully ✅")</script>';
        }
        }catch(Exception $e){
            echo "Error ហើយមេជួយមើលផង​ 😭".$e->getMessage();
        }


        try{

        $sql = "UPDATE `products` set `product_id`=null , `product_name`='Mac book' , `price`= 100
        , `stock`=10, `category_id` = 3 WHERE `product_id` = 4
        ";
        $respones = mysqli_query($con,$sql);
        if(!$respones){
            echo '<script>alert("Data Update Not Found Check Your Code ☺️")</script>';
        }else{
            echo '<script>alert("Data Update Successfully ✅")</script>';
        }
        }catch(Exception $e){
            echo "Error ហើយមេជួយមើលផង​ 😭".$e->getMessage();
        }
    
?>