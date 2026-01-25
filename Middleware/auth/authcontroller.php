<?php
    include ('../db.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        try{

            $username = $_POST['username'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $insert = "INSERT INTO `cookie_tb` (`username`,`gender`,`email`,`password`)
            values ('$username','$gender','$email','$password');
            ";

            $response = mysqli_query($config,$insert);
            if($response){
                echo 'Create User Successfullt ';
                header('location: login.php');
                exit;
            }else{
                echo 'Create User Not Found !';
            }

        }catch(Exception $e){
            echo "Erorr".$e->getMessage();
        }


    };
    //login 

    if(isset($_POST['login'])){
        try{
             $email = $_POST['email'];
        $password = $_POST['password'];

        // select query
        $select = "SELECT `email`,`password`,`role` FROM `cookie_tb` WHERE `email`='$email' AND `password`='$password'";

        $response = mysqli_query($config,$select);
        $row = mysqli_fetch_assoc($response);
        setcookie('is_login',$row['email'],time()+3600,'/');
        setcookie('role',$row['role'],time()+3600,'/');
        if($row['role'] == 0){
            header('location: ../client/index.php');
            exit;
        }else{
            header('location: ../dashboard/index.php');
            exit;
        }

        }catch(Exception $e){
            echo 'Error'.$e->getMessage();
        }
       
    }
    

    // 60 * 60 = 3600



?>