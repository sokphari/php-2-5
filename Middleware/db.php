<?php
    try{
        $config = new mysqli('localhost','root','','db-cookie');
        echo "connection successfully";
    }catch(Exception $e){
        echo 'Errror'.$e->getMessage();
    }
?>