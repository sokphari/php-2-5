<?php

//Edit by id
// 1:select id firs With Method GET
// mysqli_fetch_assocc




//Update
//2: Method POST
//Preview Old Data in database
// btn submit --> DB

include("config.php");

if(isset($_GET['cus_id']))
    {
        $id = $_GET['cus_id'];
        $sql = "SELECT * FROM `tb_customer` WHERE `cus_id` = '$id'";
        $result = mysqli_query($config,$sql);
        $row = mysqli_fetch_assoc($result);
    }

if(isset($_POST['update'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `tb_customer` SET `username`='$username' , `gender`='$gender' 
    ,`email`='$email',`password` = '$password' WHERE `cus_id` = '$id' ";

    $result = $config->query($sql);

    if(!$result){
        echo "<script>alert('Update Not Found! 🙅‍♂️')</script>";
    }else{
        echo "<script>alert('ការកែប្រែត្រូវបានធ្វើជោគជ័យ​😉')</script>";
        header('location: table.php');
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
    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="username" value="<?php echo $row['username'] ?>" id="" >
        <input type="text" name="gender" value="<?php echo $row['gender'] ?>" id="" >
        <input type="email" name="email" value="<?php echo $row['email'] ?>" id="" >
        <input type="password" name="password" value="<?php echo $row['password'] ?>" id="" >
        <button type="submit" name="update">update</button>
    </form>
</body>
</html>