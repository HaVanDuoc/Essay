<?php
    // session_start();
    // if(isset($_SESSION["username"])){
    //     $username   =   $_SESSION["username"];
    // }else{
    //     header("location:index.php");
    // }
    
    include('../connect.php');

    $id_product     =   $_GET["id"];
    $sql    =   "SELECT * FROM product WHERE id_product=$id_product";
    $query     =   mysqli_query($connect,$sql);
    $row    =   mysqli_fetch_array($query);
    
    $sql    =   "DELETE FROM product WHERE id_product = $id_product";
    $query  =   mysqli_query($connect,$sql);

    $path	=	"../image/upload/product/";
    unlink("$path$row[image_product]");

    if(isset($query)){
        header("location:list_product.php");
    }
?>