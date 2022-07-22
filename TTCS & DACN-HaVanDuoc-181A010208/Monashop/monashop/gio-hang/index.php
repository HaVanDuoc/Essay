<?php
    // hàm `session_id()` sẽ trả về giá trị SESSION_ID (tên file session do Web Server tự động tạo)
    // - Nếu trả về Rỗng hoặc NULL => chưa có file Session tồn tại
    
    if (session_id() === '') {
        // Yêu cầu Web Server tạo file Session để lưu trữ giá trị tương ứng với CLIENT (Web Browser đang gởi Request)
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng | Monashop.com</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="/monashop/style/style.css">
    <link rel="stylesheet" href="/monashop/gio-hang/gio_hang.css">
</head>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');
?>

<body>
    <?php include_once('../style/header.php');?>    <!-- Header -->

    <section>
        <?php
            if (empty($_SESSION['cart'])) {
                include_once('cart-empty.php'); // Empty shopping cart
            }
            else {
                include('cart.php'); // cart is not empty
            }
        ?>
    </section>  <!-- Content -->

    <?php include_once('../style/footer.php'); ?>   <!-- Footer -->

</body>
</html>