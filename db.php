<?php

    try{
        $config = new mysqli('localhost','root','','middleware');
    }catch(Exception $e){
        echo 'error'.$e->getMessage();
    }