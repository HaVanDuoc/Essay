<?php
    session_start();
    if(isset($_SESSION["username"])){
        $username   =   $_SESSION["username"];
    }else{
        header("location:index.php");
    }
    
    include('../connect.php');

    $id_user     =   $_GET["id"];
    $sql    =   "select * from user where id_user=$id_user";
    $query  =   mysqli_query($connect,$sql);
    $row    =   mysqli_fetch_array($query);
    
    $sql    =   "delete from user where id_user = $id_user";
    $query     =   mysqli_query($connect,$sql);
    unlink("../image/upload/user/".$row['image_product']);

    if(isset($query)){
        header("location:list_user.php");
    }
?>