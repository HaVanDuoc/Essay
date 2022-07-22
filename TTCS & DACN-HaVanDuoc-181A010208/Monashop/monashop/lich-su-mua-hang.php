<?php
    if (session_id() === '') {
        session_start();
    }

    include('connect.php');
    include('function/function.php');
    
    // Nếu chưa đăng nhập sẽ chuyển sang trang đăng nhập
    if ($_SESSION['login'] === NULL) {
        header('Location:login/dang-nhap.php');
    } else {
        header('loaction:lich-su-don-hang.php?username=$_SESSION[login]');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử mua hàng | Monashop.com</title>

    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php include_once('style/header.php')?>    <!-- header -->

    <section>
    
    </section>  <!-- main -->

    <?php include_once('style/footer.php')?>    <!-- footer -->
</body>
</html>