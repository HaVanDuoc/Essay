<?php
    session_start();
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    if(isset($_SESSION['cart'][$id])){
        if($_SESSION['cart'][$id]['num']==1){
            unset($_SESSION['cart'][$id]);
            unset($_SESSION['success']);
            unset($_SESSION['successed']);
        }
        else
            $_SESSION['cart'][$id]['num'] -=1;
    }
    header('location: ./');
?>