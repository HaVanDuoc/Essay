<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điện thoại, smartphone chính hãng giá rẻ, trả góp 0%</title>

    <link rel="stylesheet" href="/monashop/fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="/monashop/css/product.css">

</head>

<?php
    include('/xampp/htdocs/monashop/connect.php');
    include('/xampp/htdocs/monashop/function/function.php');
?>

<body>
    <?php include_once('style/header.php')?>  <!-- header -->

    <section>
        <div class="banner clearfix">
            <div class="banner_left">
                <img src="/monashop/image/dienthoai/800-200-800x200-165.png" alt="">
            </div>

            <div class="banner_right">
                <img src="/monashop/image/dienthoai/SN-note20-390-97-390x97.png" alt="">
                <img src="/monashop/image/dienthoai/390-97-390x97.png" alt="">
            </div>
        </div><!-- banner -->

        <div class="box_filter clearfix">
            <div>
                <i class="fas fa-filter"></i>
                <span>Bộ lọc</span>
            </div>
            <div><span>Hãng</span></div>
            <div><span>Giá</span></div>
            <div><span>Loại điện thoại</span></div>
            <div><span>Hiệu năng & Pin</span></div>
            <div><span>RAM</span></div>
            <div><span>Bộ nhớ trong</span></div>
            <div><span>Camera</span></div>
            <div><span>Tính năng đặc biệt</span></div>
            <div><span>Thiết kế</span></div>
            <div><span>Màn hình</span></div>

        </div><!-- filter -->
        
        <!--  -->
        <div class="box_quicklink clearfix">
            <a href=""><img src="/monashop/image/dienthoai/logo-iphone-220x48.png" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Samsung42-b_25.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/OPPO42-b_5.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Vivo42-b_50.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/logo-xiaomi-220x48-5.png" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Realme42-b_37.png" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Vsmart42-b_40.png" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/OnePlus42-b_36.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Nokia42-b_21.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Mobell42-b_19.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Itel42-b_54.jpg" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Masstel42-b_0.png" alt=""></a>
            <a href=""><img src="/monashop/image/dienthoai/Energizer42-b_32.jpg" alt=""></a>
        </div>

        <!--  -->
        <div class="box-sort">
            <ul>
                <li><strong><?=count_product('Điện thoại')?> Điện thoại</strong></li>
                <li><input type="checkbox" name="" id=""><span>Giảm giá</span></li>
                <li><input type="checkbox" name="" id=""><span>Góp 0%</span></li>
                <li><input type="checkbox" name="" id=""><span>Độc quyền</span></li>
                <li><input type="checkbox" name="" id=""><span>Mới</span></li>
            </ul>
        </div>

        <div class="box-common__main clearfix">
            <div class="listproduct">
                <?php
                    $sql    =   "SELECT * FROM product WHERE type_product = N'Điện thoại'";
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
                    <a href="info_product.php?id=<?=$row['id_product']?>&type=<?=$row['type_product']?>">
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
        </div>  <!-- content -->

        <!--  -->
        <div class="view_more clearfix">
            <a href=""><span>Xem thêm</span></a>
        </div>
    </section> <!-- main -->

    <?php include_once('style/footer.php')?><!-- footer -->
</body>
</html>