<?php
    if (session_id() === '') {
        session_start();
    }
    include ("../connect.php");
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $sql = "SELECT * FROM product WHERE id_product = '$id'";
    $query = mysqli_query($connect , $sql);
    $row = mysqli_fetch_assoc($query);
    
        
    if(isset($_SESSION['cart']))
    {
        if(isset($_SESSION['cart'][$id]))
        {
            $_SESSION['cart'][$id]['num'] +=1;
            // $_SESSION['successed'] = '<script>alert("Đã có sản phẩm trong giỏ")</script>';
        }
        else
        {
            $_SESSION['cart'][$id]['id'] = $row['id_product'];
            $_SESSION['cart'][$id]['product_image_name'] = $row['image_product'];
            $_SESSION['cart'][$id]['product_name'] = $row['name_product'];
            $_SESSION['cart'][$id]['price'] = $row['price_product'];
            $_SESSION['cart'][$id]['num'] =1;
        }
        header("location:../index.php");
    }
    else
    {
        $_SESSION['cart'][$id]['id'] = $row['id_product'];
        $_SESSION['cart'][$id]['product_image_name'] = $row['image_product'];
        $_SESSION['cart'][$id]['product_name'] = $row['name_product'];
        $_SESSION['cart'][$id]['price'] = $row['price_product'];
        $_SESSION['cart'][$id]['num'] = 1;
        $_SESSION['success'] = '<script>alert("Đã thêm sản phẩm vào giỏ")</script>';
        header("location:../index.php");
    }
?>