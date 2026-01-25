<?php
    if(!isset($_COOKIE['is_login'])){
        header('location: ../auth/login.php');
    }else{
        if($_COOKIE['role']==0){
            header('location: ../client/index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Welcome to Admin Dashboard</h3>
</body>
</html>



