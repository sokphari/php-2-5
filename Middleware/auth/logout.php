<?php
    include('db.php');
    setcookie('is_login',$row['email'],time()-3600,'/');
    setcookie('role',$row['role'],time()-3600,'/');
    header('location: login.php')
?>
