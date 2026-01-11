<?php

    include ("config.php");

    if(isset($_GET['cus_id'])){
        $id = $_GET['cus_id'];
        
            $sql = "DELETE  FROM `tb_customer` WHERE `cus_id`='$id'";

            $result = mysqli_query($config,$sql);
            if(!$result){
                echo '<script>alert("Delete Not Found!")</script>';
            }else{
                echo '<script>alert("Delete Successfull !")
                window.location.href="table.php";
                </script>';

            }


       

    }

?>