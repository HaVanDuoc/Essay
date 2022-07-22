<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop | Máy tính xách tay Giá rẻ, Trả góp 0%</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="css/product.css">

</head>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');
?>

<body>
    <?php include_once('style/header.php')?>

    <section>

        <!-- banner -->
        <div class="banner clearfix">
            <div class="banner_left">
                <img src="/monashop/image/laptop/800-200-800x200-164.png" alt="">
            </div>

            <div class="banner_right">
                <img src="/monashop/image/laptop/Evogen11-390x97-1.png" alt="">
                <img src="/monashop/image/laptop/sticky-micro-390x97.png" alt="">
            </div>
        </div>

        <!-- filter -->
        <div class="box_filter clearfix">
            <div>
                <i class="fas fa-filter"></i>
                <span>Bộ lọc</span>
            </div>
            <div><span>Hãng</span></div>
            <div><span>Giá</span></div>
            <div><span>Nhu cầu</span></div>
            <div><span>Kích thước màn hình</span></div>
            <div><span>Độ phân giải</span></div>
            <div><span>CPU</span></div>
            <div><span>RAM</span></div>
            <div><span>Ổ cứng</span></div>
            <div><span>Card đồ họa</span></div>
            <div><span>Tính năng đặc biệt</span></div>

        </div>
        
        <!--  -->
        <div class="box_quicklink clearfix">
            <a href=""><img src="/monashop/image/laptop/logo-macbook-149x40.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-asus-149x40.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-hp-149x40-2.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-lenovo-149x40.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-acer-149x40.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-dell-149x40.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-lg-149x40.png" alt=""></a>
            <a href=""><img src="/monashop/image/laptop/logo-msi-149x40.png" alt=""></a>

        </div>

        <!--  -->
        <div class="box-sort">
            <ul>
                <li><strong><?=count_product('laptop')?> Laptop</strong></li>
                <li><input type="checkbox" name="" id=""><span>Giảm giá</span></li>
                <li><input type="checkbox" name="" id=""><span>Góp 0%</span></li>
                <li><input type="checkbox" name="" id=""><span>Mới</span></li>
            </ul>
        </div>

        <!--  -->
        <div class="box-common__main">
            <div class="listproduct">

                <?php
                    $sql    =   "SELECT * FROM product WHERE type_product = 'laptop'";
                    $query  =   mysqli_query($connect, $sql);
                    $count  =   1;

                    if (isset($query)) {
                        while ($row = mysqli_fetch_assoc($query)) {
                            if ($count <= 10) {
                                $count++;
                        // }
                            
                    //     }
                    // }
                ?>

                <div class="item">
                    <a href="">
                        <div class="item-tragop"><span>Trả góp 0%</span></div>
                        <div class="item-hinh"><img src="/monashop/image/upload/product/<?=$row['image_product']?>" <?=img_size($row['type_product'])?> alt=""></div>
                        <div><?=$row['name_product']?></div>
                        <div <?=hidden($row['percent_discount_product'])?>>
                            <span class="price-old"><?=format_money($row['price_product'])?></span>
                            <span class="percent"><?="-". $row['percent_discount_product'] . "%"?></span>                        
                        </div>
                        <div class="listed-price"><?=format_money(listed_price($row['price_product'], $row['percent_discount_product']))?></div>
                        <div class="gift" <?=hidden($row['gift_product'])?>>Quà: <?=format_money($row['gift_product'])?></div>
                        <div class="evaluate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>100</span>
                        </div>
                    </a>
                </div>

                <?php
                        }}}
                ?>

            </div>
        </div>

        <!--  -->
        <div class="view_more clearfix">
            <a href=""><span>Xem thêm</span></a>
        </div>
    </section>

    <?php include_once('style/footer.php')?>
</body>
</html>