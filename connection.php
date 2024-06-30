<?php
    $host = 'localhost';
    $username= 'root';
    $password = '';
    $db='test';

   // CONNECTING USING OOP
    $connect=new mysqli($host, $username, $password, $db);
    
    if($connect){
        echo' ';
    }
    else{
        echo 'not connected'.$connect->connect_error;

    }
?>