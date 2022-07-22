<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng - Monashop.com</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="/monashop/css/style.css">
    <link rel="stylesheet" href="/monashop/css/gio_hang.css">
</head>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');
?>

<body>
    <header>
        <div class="banner-media">
            <img src="/monashop/image/1200-44-1200x44-1.png" alt="">
        </div>
        <div class="header-wrap clearfix">
            <div class="header-content">
                <a href="/monashop/" class="logo"><strong>Monashop.com</strong></a>
                <div class="bordercol"></div>
                <a href="" class="diachi-khuyenmai">
                    <p>Xem giá trị khuyến mãi tại</p>
                    <span>Hồ Chí Minh</span>
                </a>
                <form action="" class="header-search">
                    <input type="text" name="" id="" placeholder="Bạn tìm gì...">
                    <i class="fas fa-search icon__search"></i>
                </form>
                <a href="/monashop/gio-hang.php" class="giohang">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                </a>
                <a href="/monashop/lich-su-mua-hang.php" class="lichsudonhang">Lịch sử <br> đơn hàng</a>
                <div class="bordercol"></div>   
                <a href="" class="header__hot">
                    <p class="dotnew">
                        <span class="animation"></span>
                    </p>
                    <span>Sinh Nhật 17 Bẻ Gãy Sừng Trâu <br> giảm tới 47%</span>
                    
                </a>
                <div class="bordercol"></div>   
                <a href="" style="text-align: center;">24h <br> Công nghệ</a>
                <div class="bordercol"></div>   
                <a href="">Hỏi đáp</a>
                <div class="bordercol"></div>   
                <a href="">GameApp</a>
            </div>
        </div>

    </header>

    <nav>
        <div>
            <ul class="main-menu">
                <li>
                    <a href="/monashop/dien-thoai.php">
                        <i class="fas fa-mobile-alt"></i>
                        Điện thoại
                    </a>
                </li>
                <li>
                    <a href="/monashop/laptop.php">
                        <i class="fas fa-laptop"></i>
                        Laptop
                    </a>
                </li>
                <li>
                    <a href="/monashop/tablet.php">
                        <i class="fas fa-tablet-alt"></i>
                        Tablet
                    </a>
                </li>
                <li>
                    <a href="/monashop/phu-kien.php">
                        <i class="fas fa-headphones-alt"></i>
                        Phụ kiện
                    </a>
                </li>
                <li>
                    <a href="/monashop/dong-ho-thong-minh.php">
                        Đồng hồ thông minh
                    </a>
                </li>
                <li>
                    <a href="/monashop/dong-ho-thoi-trang.php">
                        Đồng hồ thời trang
                    </a>
                </li>
                <li>
                    <a href="/monashop/pc-may-in.php">
                        <i class="fas fa-desktop"></i>
                        PC, Máy in
                    </a>
                </li>
                <li>
                    <a href="/monashop/may-cu-gia-re.php">
                        Máy cũ giá rẻ
                    </a>
                </li>
                <li>
                    <a href="/monashop/sim-the-cao.php">
                        Sim, Thẻ cào
                    </a>
                </li>
                <li>
                    <a href="/monashop/tra-gop-dien-nuoc.php">
                        Trả góp, điện nước
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section>

        <?php
            
        ?>

        <!-- Giỏ hàng trống -->
        <div class="empty_cart">
            <i class="fas fa-cart-arrow-down"></i>
            <p>Không có sản phẩm nào trong giỏ hàng</p>
            <a href="/monashop/" class="back_home">Về trang chủ</a>
            <p>Khi cần trợ giúp vui lòng gọi <a href="tel:18001060" class="tel">1800.1060</a> hoặc <a href="tel:02836221060" class="tel">028.3622.1060</a> (7h30 - 22h)</p>
        </div>
    </section>
</body>
</html>