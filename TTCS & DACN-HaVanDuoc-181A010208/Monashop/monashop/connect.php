<?php
    $servername =   'localhost';
    $database   =   'monashop';
    $username   =   'root';
    $password   =   '';    
    
    $connect = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($connect, 'UTF8');

    if(!$connect){
        die("Connection failed: " . mysqli_connect_error());
    }
?>