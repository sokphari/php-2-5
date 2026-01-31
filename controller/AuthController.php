<?php
    session_start();
    include('../db.php');
    if(isset($_POST['register'])){
        $fullname = htmlspecialchars($_POST['name']);
        $gender = htmlspecialchars($_POST['gender']);
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        $email = $_POST['email'];
        $password = $_POST['password'];

        #query insert db

        $insert = "INSERT INTO `users` (`name`,`gender`,`email`,`password`)
        values ('$fullname','$gender','$email','$password')";
        
        #exceccute 
        $res = $config->query($insert);
        if($res){
            header('location: ../auth/login.php');
            exit();
        }else{
            header('location: ../auth/register.php');
        }
    }
    // login
    if(isset($_POST['login'])){
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        $email = $_POST['email'];
        $password = $_POST['password'];

        global $config;

        $select = "SELECT `email`,`password`,`role` FROM `users` WHERE `email`='$email' AND `password`='$password' ";
        $res = $config->query($select);
        if(mysqli_num_rows($res)>0){
            if($user = $res->fetch_assoc()){
                $_SESSION['is_login'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                    if($user['role'] != 0){
                        header('location: ../admin/dashboard.php');
                    }else{
                        header('location: ../client/index.php');
                    }
            }
        }else{
            header('location: ../auth/register.php');
        }
    }


    